// const navLinks = document.querySelectorAll('#navbar .nav-pills .nav-link');

// const deactivateNavItem = (navItem) => {
// 	navItem.classList.remove('active');
// };

// // Set the default active link
// if(typeof(Storage) !== "undefined" ) {
// 	let link = document.querySelector('#navbar .nav-pills .active');
// 	 localStorage.setItem("acive-page", link);
// }

// console.log(navLinks);

// const acitvateNavItem = navItem => {
// 	try {
// 		navItem.classList.add('active');
// 	} catch {
// 		return document.querySelector('#navbar .nav-pills .active');
// 	}
// };

// const deactivateAllNavs = navs => {
// 	navs.forEach(nav => {
// 		// console.log(nav.classList);
// 		if(nav.classList.contains('active')) {
// 			nav.classList.remove('active');
// 		}
// 	})
// };

// navLinks.forEach(link => {
// 	link.addEventListener('click', (event) => {
// 		event.preventDefault();
// 	   if(typeof(Storage) !== "undefined" ) {
// 	   	 localStorage.setItem("acive-page", link);
// 	   }
// 	    let location = event.target.href;
// 	    window.location = location;
	   
		
// 	});
// });

// window.onload = () => {
// 	let link = localStorage.getItem("active-page");
// 	deactivateAllNavs(navLinks);
// 	acitvateNavItem(link);
// }





/* Activate the about page side navigation */

/*const aboutNavs = [...document.querySelectorAll('a.list-group-item')];

let [activeAboutNav] = aboutNavs.filter(nav => nav.classList.contains('list-group-item-info'));

aboutNavs.forEach(nav => {
	nav.style.border = "none";
	nav.style.color = "var(--brown-dark)";
	nav.addEventListener('click', () => {
		setTimeout(() => {
			if(nav == activeAboutNav){
				return;
			}else {
				activeAboutNav.classList.remove('list-group-item-info');
				nav.classList.add('list-group-item-info');
				activeAboutNav = nav;
			}
		}, 150)
	});
});*/