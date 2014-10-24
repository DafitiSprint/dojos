# coding: utf-8

class Placar:
    
   

    def __init__(self,jogador1,jogador2):
        self.jogador1 = jogador1
        self.jogador2=jogador2
        self.pontos = {self.jogador1:0, self.jogador2:0}
        
    def getplacar(self):
        if self.pontos[self.jogador1] == 40 and self.pontos[self.jogador2] == 40 :
            return "quarenta iguais"
         
        return str(self.pontos[self.jogador1]) + 'x' + str(self.pontos[self.jogador2])
        
    def pontuar(self,jogador):
        if self.pontos[jogador] == 0:
            self.pontos[jogador] = 15
        elif self.pontos[jogador] == 15:
            self.pontos[jogador] = 30
        elif self.pontos[jogador] == 30:
            self.pontos[jogador] = 40
        elif self.pontos[jogador] == 40:
            self.pontos[jogador] = "vantagem do " + jogador
