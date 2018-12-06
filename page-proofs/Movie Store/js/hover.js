window.onload = function () {
	var blocks = document.getElementsByClassName('block1');
	console.log(blocks);

	for(var i = 0; i < blocks.length; i++) {
		blocks[i].addEventListener('click', showBlock);  // ссылка на функцию (бе скобок () - она не вызовется сразу!!!)
	}

}

function showBlock () {
	console.log('Щелк!!!');
	console.log(this);

	var showingBlock = document.createElement("div");
		showingBlock.left = '50%';
		showingBlock.top = '20%';

		showingBlock.id = "showingBlock";
		showingBlock.addEventListener("click", removeBlock)

		document.body.appendChild(showingBlock);

		console.log(showingBlock)
}

function removeBlock () {
	var showingBlock = document.getElementById("showingBlock");
	showingBlock.parentNode.removeChild(showingBlock)
}