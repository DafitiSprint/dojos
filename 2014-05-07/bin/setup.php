<?php

require __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

class GraphDB
{
    private $users = [
        'Fabio Ribeiro',
        'Andre Tagliati',
        'Evaldo Junior',
        'Willian Kumatsu',
        'Luiz Smelan',
        'Fernando Uchiyama',
        'Bruno Passos',
        'Luiz Guilherme',
        'Rodrigo Moyle',
        'Bruno Bacus',
        'Gabriel Oliveira',
        'Plinio Ribeiro',
        'Otavio Carvalho',
        'Gabriel Ricci',
        'Alexandre Cintra',
        'Fernando Dias',
        'Marcelo Balsamao'
    ];

    private $usersRelationship = [
        [1, 2, 3, 4, 7, 8, 9],
        [3, 5, 6, 7, 9],
        [4, 15, 10, 11, 13],
        [11, 15, 6, 7],
        [15, 1, 5, 12, 16],
        [12, 7, 9, 14, 11, 10, 13]
    ];

    private $products = [
        ['name' => 'Nike', 'size' => '38', 'color' => 'preto'],
        ['name' => 'Addidas', 'size' => '42', 'color' => 'azul'],
        ['name' => 'Converse', 'size' => '44', 'color' => 'verde'],
        ['name' => 'Puma', 'size' => '40', 'color' => 'preto'],
        ['name' => 'La Coste', 'size' => '40', 'color' => 'branco'],
        ['name' => 'Ferracini', 'size' => '42', 'color' => 'bege'],
        ['name' => 'New Balance', 'size' => '36', 'color' => 'azul'],
        ['name' => 'Quicksilver', 'size' => '42', 'color' => 'rosa',],
        ['name' => 'Kildare', 'size' => '48', 'color' => 'preto'],
        ['name' => 'Globe', 'size' => '40', 'color' => 'branco'],
    ];

    private $nodes = ['users' => [], 'products' => []];

    private $client;

    public function getClient()
    {
        if (null === $this->client) {
            $this->client = new \Everyman\Neo4j\Client();
        }

        return $this->client;
    }

    public function clearAll()
    {
        (new \Everyman\Neo4j\Cypher\Query($this->getClient(), 'MATCH (n)-[r]->() DELETE n, r;'))->getResultSet();
        (new \Everyman\Neo4j\Cypher\Query($this->getClient(), 'MATCH (n) DELETE n;'))->getResultSet();
    }

    public function createUserNodes()
    {
        foreach ($this->users as $user) {
            $node = $this->getClient()->makeNode();
            $node->setProperty('name', $user)
                ->save();

            $label = $this->getClient()->makeLabel('USER');

            $node->addLabels([$label]);

            $this->nodes['users'][] = $node;

            $node  = null;
            $label = null;
        }
    }

    public function createProductNodes()
    {
        foreach ($this->products as $product) {
            $node = $this->getClient()->makeNode();
            $node->setProperty('name', $product['name'])
                ->setProperty('size', $product['size'])
                ->setProperty('color', $product['color'])
                ->save();

            $label = $this->getClient()->makeLabel('PRODUCT');

            $node->addLabels([$label]);

            $this->nodes['products'][] = $node;

            $node  = null;
            $label = null;
        }
    }

    public function createUsersRelationship()
    {
        foreach ($this->usersRelationship as $index => $user) {
            foreach ($user as $friend) {
                $this->nodes['users'][$index]->relateTo($this->nodes['users'][$friend], 'FRIEND')
                    ->save();
            }
        }
    }

    public function execute()
    {
        $this->clearAll();
        $this->createUserNodes();
        $this->createUsersRelationship();
        $this->createProductNodes();
    }
}

$graphDb = new GraphDB();
$graphDb->execute();
