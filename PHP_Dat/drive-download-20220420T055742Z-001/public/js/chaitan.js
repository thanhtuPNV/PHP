function play_video() {
    document.getElementById('modal-video').style.display = "block";
    document.getElementById('body').style.overflowY = "hidden";
}

function close_video() {
    document.getElementById('modal-video').style.display = "none";
    document.getElementById('body').style.overflowY = "auto";
}

window.onclick = function (event) {
    if (event.target == document.getElementById('modal-video')) {
        document.getElementById('modal-video').style.display = "none";
        document.getElementById('body').style.overflowY = "auto";
    }
}

function update_formation() {
    document.getElementById('button').style.display = "none";
    document.getElementById('update-info').style.display = "block";
    document.getElementById('cancal').style.display = "block";
}

function cancal() {
    document.getElementById('button').style.display = "block";
    document.getElementById('update-info').style.display = "none";
    document.getElementById('cancal').style.display = "none";
}


// function searching() {
//     document.getElementById('input-search').style.display = 'block';
// }

// const inputSearch = document.querySelector(".input-search");
// const autoBox = document.querySelector(".autobox");
// inputSearch.onkeyup = (e) => {
//     let checkData = e.target.value;
//     let dataArray = [];
//     if (checkData) {
//         dataArray = recomentList.filter((data) => {
//             return data.toLocaleLowerCase().startsWith(checkData.toLocaleLowerCase())
//         });
//         dataArray = dataArray.map((data) => {
//             return data = '<li>' + data + '</li > '
//         });
//         autoBox.classList.add('active');
//         showAdress(dataArray);
//         let liItem = autoBox.querySelectorAll("li");
//         for (let i = 0; i < liItem.length; i++) {
//             liItem[i].addEventListener("click", function () {
//                 inputSearch.value = liItem[i].innerHTML;
//                 autoBox.classList.remove('active');
//             })
//         }
//     } else {
//         autoBox.classList.remove('active');
//     }
// }

// function showAdress(list) {
//     let listData;
//     if (!list.length) {
//         listData = '<li>' + inputSearch.value + '</li>';
//     } else {
//         listData = list.join('');
//     }
//     autoBox.innerHTML = listData;
// }

// const deleteText = document.querySelector(".delete");
// deleteText.addEventListener("click", function () {
//     data = "";
//     inputSearch.value = data;
//     autoBox.classList.remove('active');
// })
// let recomentList = [
//     "An Giang",
//     "B?? r???a ??? V??ng t??u",
//     "B???c Giang",
//     "B???c K???n",
//     "B???c Li??u",
//     "B???c Ninh",
//     "B???n Tre",
//     "B??nh ?????nh",
//     "B??nh D????ng",
//     "B??nh Ph?????c",
//     "B??nh Thu???n",
//     "C?? Mau",
//     "C???n Th??",
//     "Cao B???ng",
//     "???? N???ng",
//     "?????k L???k",
//     "?????k N??ng",
//     "??i???n Bi??n",
//     "?????ng Nai",
//     "?????ng Th??p",
//     "Gia Lai",
//     "H?? Giang",
//     "H?? Nam",
//     "H?? N???i",
//     "H?? T??nh",
//     "H???i D????ng",
//     "H???i Ph??ng",
//     "H???u Giang",
//     "H??a B??nh",
//     "H??ng Y??n",
//     "Kh??nh H??a",
//     "Ki??n Giang",
//     "Kon Tum",
//     "Lai Ch??u",
//     "L??m ?????ng",
//     "L???ng S??n",
//     "L??o Cai",
//     "Long An",
//     "Nam ?????nh",
//     "Ngh??? An",
//     "Ninh B??nh",
//     "Ninh Thu???n",
//     "Ph?? Th???",
//     "Ph?? Y??n",
//     "Qu???ng B??nh",
//     "Qu???ng Nam",
//     "Qu???ng Ng??i",
//     "Qu???ng Ninh",
//     "Qu???ng Tr???",
//     "S??c Tr??ng",
//     "S??n La",
//     "T??y Ninh",
//     "Th??i B??nh",
//     "Th??i Nguy??n",
//     "Thanh H??a",
//     "Th???a Thi??n Hu???",
//     "Ti???n Giang",
//     "Th??nh ph??? H??? Ch?? Minh",
//     "Tr?? Vinh", "Tuy??n Quang",
//     "V??nh Long",
//     "V??nh Ph??c",
//     "V??nh Ph??c"
// ];