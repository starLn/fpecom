const q1 = document.querySelectorAll(".q1");
const q2 = document.querySelectorAll(".q2");
const q3 = document.querySelectorAll(".q3");
const q4 = document.querySelectorAll(".q4");
const q5 = document.querySelectorAll(".q5");
const menu = document.querySelector(".menu");

q1.forEach((dropdown) => {
	const select = dropdown.querySelector(".select");
	const caret = dropdown.querySelector(".caret");
	const desc = menu.querySelector(".a1");
	select.addEventListener("click", () => {
		select.classList.toggle("select-clicked");
		caret.classList.toggle("caret-rotate");
		desc.classList.toggle("menu-open");
	});
});

q2.forEach((dropdown) => {
	const select = dropdown.querySelector(".select");
	const caret = dropdown.querySelector(".caret");
	const desc = menu.querySelector(".a2");
	select.addEventListener("click", () => {
		select.classList.toggle("select-clicked");
		caret.classList.toggle("caret-rotate");
		desc.classList.toggle("menu-open");
	});
});

q3.forEach((dropdown) => {
	const select = dropdown.querySelector(".select");
	const caret = dropdown.querySelector(".caret");
	const desc = menu.querySelector(".a3");
	select.addEventListener("click", () => {
		select.classList.toggle("select-clicked");
		caret.classList.toggle("caret-rotate");
		desc.classList.toggle("menu-open");
	});
});
q4.forEach((dropdown) => {
	const select = dropdown.querySelector(".select");
	const caret = dropdown.querySelector(".caret");
	const desc = menu.querySelector(".a4");
	select.addEventListener("click", () => {
		select.classList.toggle("select-clicked");
		caret.classList.toggle("caret-rotate");
		desc.classList.toggle("menu-open");
	});
});
q5.forEach((dropdown) => {
	const select = dropdown.querySelector(".select");
	const caret = dropdown.querySelector(".caret");
	const desc = menu.querySelector(".a5");
	select.addEventListener("click", () => {
		select.classList.toggle("select-clicked");
		caret.classList.toggle("caret-rotate");
		desc.classList.toggle("menu-open");
	});
});
