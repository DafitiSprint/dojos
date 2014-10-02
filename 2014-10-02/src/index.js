$(document).ready(function(){
	var work = function(event) {
		$.loading(true, { text: 'Working...', pulse: 'fade'});
		var worker = new Worker("worker.js");
		worker.onmessage = function (e) {
			print(e.data);
			$.loading(false, { text: 'Working...', pulse: 'fade'});
		};
		worker.postMessage(this.id + "@" + JSON.stringify(speller.nWords));
	};

	$("#correct").click(work);
});

print = function(str) {
	var old = $("#result > pre")[0].innerHTML;
	$("#result > pre")[0].innerHTML = old + "<br>" + str;
};
