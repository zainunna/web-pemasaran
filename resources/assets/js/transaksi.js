import Vue from 'vue'
import axios from 'axios'
​
//import sweetalert library
import VueSweetalert2 from 'vue-sweetalert2';
​
Vue.filter('currency', function (money) {
    return accounting.formatMoney(money, "Rp ", 2, ".", ",")
})
​
//use sweetalert
Vue.use(VueSweetalert2);
​
new Vue({
    el: '#dw',
    data: {
        barang: {
            id: '',
            kode_barang: '',
            nama_barang: '',
            foto: ''
        },
        //menambahkan cart
        cart: {
            kode_barang: '',
            qty: 1
        },
        //untuk menampung list cart
        shoppingCart: [],
        submitCart: false
    },
    watch: {
        //apabila nilai dari barang > id berubah maka
        'barang.id': function() {
            //mengecek jika nilai dari barang > id ada
            if (this.barang.id) {
                //maka akan menjalankan methods getbarang
                this.getbarang()
            }
        }
    },
    //menggunakan library select2 ketika file ini di-load
    mounted() {
        $('#kode_barang').select2({
            width: '100%'
        }).on('change', () => {
            //apabila terjadi perubahan nilai yg dipilih maka nilai tersebut 
            //akan disimpan di dalam var barang > id
            this.barang.id = $('#kode_barang').val();
        });
        
        //memanggil method getCart() untuk me-load cookie cart
        this.getCart()
    },
    methods: {
        getbarang() {
            //fetch ke server menggunakan axios dengan mengirimkan parameter id
            //dengan url /api/barang/{id}
            axios.get(`/api/barang/${this.barang.id}`)
            .then((response) => {
                //assign data yang diterima dari server ke var barang
                this.barang = response.data
            })
        },
        
        //method untuk menambahkan barang yang dipilih ke dalam cart
        addToCart() {
            this.submitCart = true;
            
            //send data ke server
            axios.post('/api/cart', this.cart)
            .then((response) => {
                setTimeout(() => {
                    //apabila berhasil, data disimpan ke dalam var shoppingCart
                    this.shoppingCart = response.data
                    
                    //mengosongkan var
                    this.cart.kode_barang = ''
                    this.cart.qty = 1
                    this.barang = {
                        id: '',
                        harga: '',
                        nama_barang: '',
                        foto: ''
                    }
                    $('#kode_barang').val('')
                    this.submitCart = false
                }, 2000)
            })
            .catch((error) => {
​
            })
        },
        
        //mengambil list cart yang telah disimpan
        getCart() {
            //fetch data ke server
            axios.get('/api/cart')
            .then((response) => {
                //data yang diterima disimpan ke dalam var shoppingCart
                this.shoppingCart = response.data
            })
        },
        
        //menghapus cart
        removeCart(id) {
            //menampilkan konfirmasi dengan sweetalert
            this.$swal({
                title: 'Kamu Yakin?',
                text: 'Kamu Tidak Dapat Mengembalikan Tindakan Ini!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Iya, Lanjutkan!',
                cancelButtonText: 'Tidak, Batalkan!',
                showCloseButton: true,
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            resolve()
                        }, 2000)
                    })
                },
                allowOutsideClick: () => !this.$swal.isLoading()
            }).then ((result) => {
                //apabila disetujui
                if (result.value) {
                    //kirim data ke server
                    axios.delete(`/api/cart/${id}`)
                    .then ((response) => {
                        //load cart yang baru
                        this.getCart();
                    })
                    .catch ((error) => {
                        console.log(error);
                    })
                }
            })
        }
    }
})