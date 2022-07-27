
import axios from "axios";
import Qs from "qs";
import Dropzone from "dropzone";
import $ from 'jquery';

export default class productStore {
    constructor() {
        this.settings();
        this.bindEvents();
    }
    settings() {
        this.btnSave = document.getElementById('product-save');
        this.btnStatus = this.btnSave?.getAttribute('data-status')
        this.postUrl = this.btnSave?.getAttribute('data-url');
        this.csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }
    bindEvents() {
        this.btnSave?.addEventListener('click', (e) => {
            e.preventDefault();

            this.store();
        });

        let dropzone = document.getElementById('dropzone');
        
        if (dropzone) {
            new Dropzone(dropzone, {
                url: this.postUrl,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                }
            })
        }
    }
    store() {
        const author = document.getElementById('author').value;
        const title = document.querySelector('[name="title"]').value;
        const description = document.querySelector('#description .ck-content p').innerHTML;
        const short_description = document.querySelector('[name="shortDescription"]').value;
        const price = document.querySelector('[name="price"]').value;
        const price_sale = document.querySelector('[name="price_sale"]').value;
        const published = document.querySelector('[name="published"]').value === 'on' ? 1 : '';
        const categoriesVal = document.querySelector('[name="categories"]').value;
        // const tagsVal = document.querySelector('[name="tags"]');
        const file = document.getElementById('file')[0].files[0];

        // const categories = [...categoriesVal.options]
        //                             .filter(option => option.selected)
        //                             .map(option => option.value);

        // const tags = [...tagsVal.options]
        //                     .filter(option => option.selected)
        //                     .map(option => option.value)

        const data = {
            author,
            title,
            description,
            short_description,
            published,
            categories: categoriesVal,
            // tags,
            price,
            price_sale,
            file
        };

        console.log(data);

        

        // axios.post(this.postUrl, {
        //     data,
        //     headers: {
        //         "Content-Type": "multipart/form-data",
        //     },
        // })
        //     .then((response) => {
        //     // handle success
        //         if ( response.data.code === 200 ) {
        //             this.done(response);
        //         } else {
        //             this.error();
        //         }
        //     })
        //     .catch((error) => {
        //     // handle error
        //         console.log('error ' + error);
        //     })
        //     .then((response) => {
        //     // always executed
                
        //     });
    }
    done(response) {
        window.location.href = response.data.location;
        // console.log(response.data);
    }
    error() {
        console.log('Error');
    }
}

