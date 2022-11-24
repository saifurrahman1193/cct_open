export default {
    state: {
        isLoggedIn: false,
        userInfo:{},
        cart:(localStorage.getItem('guestCart') ? JSON.parse(localStorage.getItem('guestCart')) : []),
        compareList: (localStorage.getItem('compareList') ? JSON.parse(localStorage.getItem('compareList')) : []),
        wishList: [],
        // search
        searchInput:'',
        searchProducts:[],
        searchCategoryProducts:[],
        searchLoading:false,
        searchCategory:'',
        searchCategorySlug:'',

        // admin
        currentUserRoles:[],
        currentUserModules:[],
        currentUserModulesRouteNames:[],

        // order delivery
        deliveryaddress:{},
        admin_subheading_parent_moduleId:[],
        admin_subheading_moduleId:'',

        f_dynamic_page_info:{}



    },
    getters:{

        getIsLoggedIn(state){
            return state.isLoggedIn;
        },
        getCartList(state){
            return state.cart;
        },
        getCartListCount(state){
            return state.cart.length;
        },

        getCompareList(state){
            return state.compareList;
        },


        getWishList(state){
            return state.wishList;
        },

        getSearchProducts(state){
            return state.searchProducts;
        },
        getSearchCategoryProducts(state){
            return state.searchCategoryProducts;
        },
        getSearchLoading(state){
            return state.searchLoading;
        },





        // admin
        getCurrentUserRoles(state){
            return state.currentUserRoles;
        },
        getCurrentUserModules(state){
            return state.currentUserModules;
        },
        getCurrentUserModulesRouteNames(state){
            return state.currentUserModulesRouteNames;
        },



    },
    mutations:{
        SET_ISLOGGEDIN (state, value) {
            state.isLoggedIn = value;
            // console.log('state.isLoggedIn = '+value)
        },
        SET_USERINFO (state, value) {
            state.userInfo = value;
        },
        ADD_TO_CART (state, obj) {
            state.cart.push(obj);
        },
        REMOVE_FROM_CART (state, productId) {
            state.cart = state.cart.filter(function(product){
                return product.productId != productId
            });
        },
        CLEAR_CART (state) {
            state.cart = []
        },

        ADD_TO_COMPARELIST (state, productId) {
            state.compareList.push(productId);
        },
        REMOVE_FROM_COMPARELIST (state, productId) {
            console.log(state.compareList)
            state.compareList = state.compareList.filter(function(compareListProductId){
                return compareListProductId != productId
            });
        },


        ADD_TO_WISHLIST (state, productId) {
            state.wishList.push(productId);
        },
        REMOVE_FROM_WISHLIST (state, productId) {
            state.wishList = state.wishList.filter(function(wishListProductId){
                return wishListProductId != productId
            });
        },

        SET_CURRENTUSERWISHLISTS (state, wishlist) {
            state.wishList = wishlist;
        },





        SET_CURRENTUSERROLES (state, value) {
            state.currentUserRoles = value;
        },
        SET_CURRENTUSERMODULES (state, value) {
            state.currentUserModules = value;
        },
        SET_CURRENTUSERMODULESROUTENAMES (state, value) {
            state.currentUserModulesRouteNames = value;
        },

        SET_SEARCH_INPUT (state, value) {
            state.searchInput = value;
        },

        SET_SEARCH_PRODUCTS (state, value) {
            state.searchProducts = value;
        },
        SET_SEARCH_CATEGORY_PRODUCTS (state, value) {
            state.searchCategoryProducts = value;
        },
        SET_SEARCH_LOADING (state, value) {
            state.searchLoading = value;
        },


        SET_CATEGORY_PRODUCTS (state, value) {
            state.searchProducts = value;
        },
        SET_SEARCH_CATEGORY(state, value){
            state.searchCategory = value;
        },

        SET_SEARCH_CATEGORY_SLUG(state, value){
            state.searchCategorySlug = value;
        },

        SET_DELIVERYADDRESS(state, value){
            state.deliveryaddress = value;
        },

        ADD_TO_ADMIN_SUBHEADING_PARENTMODULEID(state, value){
            state.admin_subheading_parent_moduleId = [value];
        },
        ADD_TO_ADMIN_SUBHEADING_MODULEID(state, value){
            state.admin_subheading_moduleId = value;
        },
        SET_F_DYNAMIC_PAGE_INFO(state, value){
            state.f_dynamic_page_info = value
        },


    },
    actions:{
        checkIsLoggedIn({commit}){
            // console.log('checkIsLoggedIn called')
            // console.log('checkIsLoggedIn called and token = '+localStorage.getItem('token'))

            axios.post('/api/auth/me?token='+localStorage.getItem('token'))
            .then(function (response) {
                commit('SET_ISLOGGEDIN', true);
                commit('SET_USERINFO', response.data.userData);
            })
            .catch(function (error) {
                commit('SET_ISLOGGEDIN', false);
                commit('SET_USERINFO', {});
            })

        },

        setCurrentUserRoles({commit}){

            axios.get('/api/auth/getCurrentUserRoles?token='+localStorage.getItem('token'))
            .then(function (response) {
                commit('SET_CURRENTUSERROLES', response.data.data);
            })
            .catch(function (error) {
                commit('SET_CURRENTUSERROLES', []);
            })

        },
        setCurrentUserModules({commit}){

            axios.get('/api/auth/getCurrentUserModules?token='+localStorage.getItem('token'))
            .then(function (response) {
                commit('SET_CURRENTUSERMODULES', response.data.modules);
                commit('SET_CURRENTUSERMODULESROUTENAMES', response.data.routenames);
            })
            .catch(function (error) {
                commit('SET_CURRENTUSERMODULES', []);
                commit('SET_CURRENTUSERMODULESROUTENAMES', []);
            })

        },
        setCurrentUserWishLists({commit}){
            axios.get('/api/getCurrentUserWishLists?token='+localStorage.getItem('token'))
            .then(function (response) {
                commit('SET_CURRENTUSERWISHLISTS', response.data.data);
            })
            .catch(function (error) {
                commit('SET_CURRENTUSERWISHLISTS', []);
            })
        },

        setSearchProducts({commit}){

            if (this.state.searchInput) {
                axios.post('/api/getSearchProductsWithDiscountCalculation/'+(this.state.searchInput || ''), {token: localStorage.getItem('token')})
                .then(function (response) {
                    commit('SET_SEARCH_PRODUCTS', response.data.data);
                    commit('SET_SEARCH_LOADING', false);
                })
                    .catch(function (error) {
                        commit('SET_SEARCH_PRODUCTS', []);
                })
            }


        },
        setSearchLoading({commit}){
            commit('SET_SEARCH_LOADING', true);
        },
        setSearchLoadingFalse({commit}){
            commit('SET_SEARCH_LOADING', false);
        },


        setSearchCategoryProducts({commit}){
            axios.post('/api/getSearchCategoryProductsWithDiscountCalculation/'+this.state.searchCategorySlug, {token: localStorage.getItem('token')})
            .then(function (response) {
                commit('SET_SEARCH_CATEGORY_PRODUCTS', response.data.data);
                commit('SET_SEARCH_LOADING', false);
            })
            .catch(function (error) {
                commit('SET_SEARCH_CATEGORY_PRODUCTS', []);
            })
        },

        setDynamicPageInfo({commit}, payload){
            axios.get('/api/getPageWithSlug/'+payload.pageSlug)
            .then(function (response) {
                commit('SET_F_DYNAMIC_PAGE_INFO', response.data.data);
            })
            .catch(function (error) {
                commit('SET_F_DYNAMIC_PAGE_INFO', {});
            })
        }


    }
}
