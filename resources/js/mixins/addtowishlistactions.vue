
<script>
import { mapState, mapGetters } from 'vuex'

    export default {

        mounted() {
            // this.getCurrentUserWishLists();
            // this.$store.dispatch('checkIsLoggedIn')
        },
        data() {
            return {
                token: localStorage.getItem('token'),
            }
        },
        methods: {
            getCurrentUserWishLists(){
                var _this= this;
                axios.get('/api/getCurrentUserWishLists?token='+this.token)
                .then(function (response) {
                    _this.$store.commit('SET_CURRENTUSERWISHLISTS', response.data.data);
                })
                .catch(function (error) {

                })
            },
            addCurrentUserProductToWishlist(productId){
                if (this.isLoggedIn) {
                    var _this = this;
                    axios.post('/api/addCurrentUserProductToWishlist/'+productId+'?token='+this.token)
                    .then(function (response) {
                        _this.getCurrentUserWishLists()
                        _this.$store.commit('ADD_TO_WISHLIST', productId)
                        _this.addWishlistall(productId)
                    })
                    .catch(function (error) {

                    })
                }
                else{
                    this.$router.push('/login');
                }
            },
            removeCurrentUserProductFromWishlist(productId){
                if (this.isLoggedIn) {
                    var _this = this;
                    axios.post('/api/removeCurrentUserProductFromWishlist/'+productId+'?token='+this.token)
                    .then(function (response) {
                        _this.getCurrentUserWishLists()
                        _this.$store.commit('REMOVE_FROM_WISHLIST', productId)
                    })
                    .catch(function (error) {

                    })
                }
                else{
                    this.$router.push('/login');
                }
            },

            isAddedToWishlist(productId) {
                var isAdded = 0;
                var _this = this;

                this.wishList.forEach(wishListProductId => {
                    if (wishListProductId == productId ) {
                        isAdded=1;
                    }
                });

                return isAdded;
            },
            addWishlistall(productId){
                axios.post('/api/addWishlistall', {productId:productId, token: this.token})
                .then(function (response) {
                })
                .catch(function (error) {
                })
            },
        },
        computed: {
            ...mapState([
                'isLoggedIn', 'wishList'
            ]),


        },

    }

</script>


