
<script>
    import { mapState, mapGetters } from 'vuex'

    export default {
        mounted() {

        },
        data() {
            return {
                guestCart: (localStorage.getItem('guestCart') ? JSON.parse(localStorage.getItem('guestCart')) : []),
            }
        },
        computed: {
             ...mapState([
            ]),
            ...mapGetters([
                'getCartList'
            ])
        },
        methods: {
            addQtyToGuestCart(productId){
                var qty = this.getCartProductQty(productId);
                qty = parseInt(qty);
                qty = (qty>0 ? qty : 0);
                var isProductAlreadyAdded = (qty>0 ? 1 : 0)
                console.log('isProductAlreadyAdded = '+isProductAlreadyAdded)
                if(isProductAlreadyAdded )
                {
                    qty = qty + 1;
                    var productObj = {"productId":productId, "qty": qty};
                    this.removeProductFromCart(productId)
                    console.log(JSON.stringify(this.guestCart))
                    this.guestCart.push(productObj);
                    console.log(JSON.stringify(this.guestCart))
                    localStorage.setItem("guestCart", JSON.stringify(this.guestCart));
                    this.$store.commit('ADD_TO_CART', productObj)
                }
                else
                {
                    console.log(JSON.stringify(this.guestCart))
                    var productObj = {"productId":productId, "qty": 1};
                    this.$store.commit('ADD_TO_CART', productObj)
                    console.log(JSON.stringify(this.guestCart))
                    this.guestCart = this.getCartList;
                    // this.guestCart.push(productObj);
                    localStorage.setItem("guestCart", JSON.stringify(this.guestCart));
                    console.log(JSON.stringify(this.guestCart))
                }
            },
            getCartProductQty(productId){
                var qty = 0;

                this.guestCart = this.getCartList; // important
                this.guestCart.forEach(product => {
                    if (product.productId == productId)
                    {
                        qty = product.qty
                    }
                });
                return qty;
            },
            removeProductFromCart(productId){
                this.guestCart = this.guestCart.filter(function(product){
                    return product.productId != productId
                })
                this.$store.commit('REMOVE_FROM_CART', productId)
                localStorage.setItem("guestCart", JSON.stringify(this.guestCart));
            },
            subtractProductQtyFromCart(productId){
                var qty = 0;
                this.guestCart.forEach(product => {
                    if (product.productId==productId )
                    {
                        qty = parseInt(product.qty);
                    }
                });

                if (qty>=2)
                {
                    var productObj = {"productId":productId, "qty": qty-1};
                    this.removeProductFromCart(productId)
                    this.guestCart.push(productObj);
                    localStorage.setItem("guestCart", JSON.stringify(this.guestCart));
                    this.$store.commit('REMOVE_FROM_CART', productId)
                    this.$store.commit('ADD_TO_CART', productObj)
                }
                else
                {
                    this.guestCart = this.guestCart.filter(function(product){
                        return product.productId != productId
                    });
                    this.removeProductFromCart(productId)
                }
            }
        },

    }

</script>


