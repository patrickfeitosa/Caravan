/* Filtro */ 

const contentList = document.querySelector("#content-body");

if(document.getElementById("search-form") != null){
	const searchBar = document.forms["search-form"].querySelector('input');
	searchBar.addEventListener('keyup', function(e){
		const term = e.target.value.toLowerCase();
		const elements = contentList.getElementsByTagName('tr');

		Array.from(elements).forEach(function(element){
			var result = element.textContent.toLowerCase();	

			if(result.indexOf(term) < 0){
				element.classList.add('hide-content');
			}else{
				element.classList.remove('hide-content');
			}

		});
	});
}