/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// import {aw} from "../admin/assets/vendor/chart.js/chunks/helpers.segment";
const api = "http://localhost:3000/products";
/*export */const getProducts = async function(content){
    try{
        let data;
        for(let i of [() => fetch(api), data => data.json()]){
            data = await i(data);
        }
        // console.log(data);
        data.forEach(product => {
            const frameProduct = document.createElement('div');
            frameProduct.classList.add('col');
            frameProduct.classList.add('mb-5');
            frameProduct.innerHTML = `
                    <div class="card h-100">
                            <img class="card-img-top" src="${product.image}" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">${product.name}</h5>
                                    ${product.price}
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="viewProduct.php?id=${product.id}">Xem chi tiết</a></div>
                            </div>
                    </div>
            `;
            content.append(frameProduct);
        })
    }catch(error){
        console.error(error);
    }
}


/*export */const getProduct = async (id) => {
    try {
        let data;
        for(let i of [() => fetch(api + `/${id}`), data => data.json()]){
            data = await i(data);
        }
        const imgDetails = document.querySelector('.img-details');
        const infoDetails = document.querySelector('.info-details');
        imgDetails.innerHTML = `<img src="${data.image}" style="width: 100%;" alt="Ảnh sản phẩm">`;
        infoDetails.innerHTML = `
                <h2>${data.name}</h2>
                <p>${data.description}</p>
                <form onsubmit="submitCart(this)">
                    <label for="quantity" class="form-label mb-2">Số lượng: </label>
                    <input type="number" class="form-control mb-2" id="quantity" name="quantity" min="0" value="1">
                    <input type="hidden" name="id" class="form-control" value="${idURL}">
                    <button class="btn btn-outline-primary" id="addCart"> Thêm vào giỏ hàng</button>
                </form>
            `;
    }catch (error){
        console.error(error)
    }
}

/*export */const addToCart = async function(id, quantity){
    const carts = localStorage.getItem('carts');
    const products = JSON.parse(carts);
    if(carts){
        const products = JSON.parse(carts);
        const check = products.some(product => product.id==id);
        if(check){
            const productsUpdate = products.map(product => {
                if(product.id==id){
                    product.quantity = product.quantity + quantity;
                }
                return product;
            });
            localStorage.setItem("carts", JSON.stringify(productsUpdate));
        }else{
            const productsUpdate = {id, quantity};
            localStorage.setItem('carts', JSON.stringify(Array.from(products).concat(productsUpdate)));
        }
    }else{
        const productsUpdate = {id, quantity};
        localStorage.setItem('carts', JSON.stringify([productsUpdate]));
    }
    total();
}

/*export */const total = function (){
    const badge = document.querySelector(".badge.bg-dark.text-white.ms-1.rounded-pill");
    const carts = localStorage.getItem('carts');
    if(carts){
        const items = JSON.parse(carts);
        badge.innerHTML = items.reduce((acc, currentValue) => {
            return acc + currentValue.quantity;
        }, 0);
    }else badge.innerHTML = 0;
}

/*export */const submitCart = function (form){
    event.preventDefault();
    const id = form.children.id.value;
    const quantity = form.children.quantity.value;
    addToCart(id, Number(quantity));
}