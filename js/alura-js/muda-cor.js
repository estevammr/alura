var tr = document.getElementsByTagName("tr");

percorreArray(tr, function(tr){
	tr.addEventListener("mouseover", function(){
		this.setAttribute("bgcolor", "grey");
	});
});