"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;
var _default = {
  state: {
    isLoggedIn: false,
    userInfo: {},
    cart: localStorage.getItem('guestCart') ? JSON.parse(localStorage.getItem('guestCart')) : [],
    compareList: localStorage.getItem('compareList') ? JSON.parse(localStorage.getItem('compareList')) : [],
    wishList: [],
    // search
    searchInput: '',
    searchProducts: [],
    searchCategoryProducts: [],
    searchLoading: false,
    searchCategory: '',
    searchCategorySlug: '',
    // admin
    currentUserRoles: [],
    currentUserModules: [],
    currentUserModulesRouteNames: [],
    // order delivery
    deliveryaddress: {},
    admin_subheading_parent_moduleId: [],
    admin_subheading_moduleId: '',
    f_dynamic_page_info: {}
  },
  getters: {
    getIsLoggedIn: function getIsLoggedIn(state) {
      return state.isLoggedIn;
    },
    getCartList: function getCartList(state) {
      return state.cart;
    },
    getCartListCount: function getCartListCount(state) {
      return state.cart.length;
    },
    getCompareList: function getCompareList(state) {
      return state.compareList;
    },
    getWishList: function getWishList(state) {
      return state.wishList;
    },
    getSearchProducts: function getSearchProducts(state) {
      return state.searchProducts;
    },
    getSearchCategoryProducts: function getSearchCategoryProducts(state) {
      return state.searchCategoryProducts;
    },
    getSearchLoading: function getSearchLoading(state) {
      return state.searchLoading;
    },
    // admin
    getIsAdminLoggedIn: function getIsAdminLoggedIn(state) {
      return state.isAdminLoggedIn;
    },
    getCurrentUserRoles: function getCurrentUserRoles(state) {
      return state.currentUserRoles;
    },
    getCurrentUserModules: function getCurrentUserModules(state) {
      return state.currentUserModules;
    },
    getCurrentUserModulesRouteNames: function getCurrentUserModulesRouteNames(state) {
      return state.currentUserModulesRouteNames;
    }
  },
  mutations: {
    SET_ISLOGGEDIN: function SET_ISLOGGEDIN(state, value) {
      state.isLoggedIn = value;
    //   console.log('state.isLoggedIn = ' + value);
    },
    SET_USERINFO: function SET_USERINFO(state, value) {
      state.userInfo = value;
    },
    ADD_TO_CART: function ADD_TO_CART(state, obj) {
      state.cart.push(obj);
    },
    REMOVE_FROM_CART: function REMOVE_FROM_CART(state, productId) {
      state.cart = state.cart.filter(function (product) {
        return product.productId != productId;
      });
    },
    CLEAR_CART: function CLEAR_CART(state) {
      state.cart = [];
    },
    ADD_TO_COMPARELIST: function ADD_TO_COMPARELIST(state, productId) {
      state.compareList.push(productId);
    },
    REMOVE_FROM_COMPARELIST: function REMOVE_FROM_COMPARELIST(state, productId) {
      console.log(state.compareList);
      state.compareList = state.compareList.filter(function (compareListProductId) {
        return compareListProductId != productId;
      });
    },
    ADD_TO_WISHLIST: function ADD_TO_WISHLIST(state, productId) {
      state.wishList.push(productId);
    },
    REMOVE_FROM_WISHLIST: function REMOVE_FROM_WISHLIST(state, productId) {
      state.wishList = state.wishList.filter(function (wishListProductId) {
        return wishListProductId != productId;
      });
    },
    SET_CURRENTUSERWISHLISTS: function SET_CURRENTUSERWISHLISTS(state, wishlist) {
      state.wishList = wishlist;
    },
    SET_ISADMINLOGGEDIN: function SET_ISADMINLOGGEDIN(state, value) {
      state.isAdminLoggedIn = value; // console.log('state.isAdminLoggedIn = '+value)
    },
    SET_CURRENTUSERROLES: function SET_CURRENTUSERROLES(state, value) {
      state.currentUserRoles = value;
    },
    SET_CURRENTUSERMODULES: function SET_CURRENTUSERMODULES(state, value) {
      state.currentUserModules = value;
    },
    SET_CURRENTUSERMODULESROUTENAMES: function SET_CURRENTUSERMODULESROUTENAMES(state, value) {
      state.currentUserModulesRouteNames = value;
    },
    SET_SEARCH_INPUT: function SET_SEARCH_INPUT(state, value) {
      state.searchInput = value;
    },
    SET_SEARCH_PRODUCTS: function SET_SEARCH_PRODUCTS(state, value) {
      state.searchProducts = value;
    },
    SET_SEARCH_CATEGORY_PRODUCTS: function SET_SEARCH_CATEGORY_PRODUCTS(state, value) {
      state.searchCategoryProducts = value;
    },
    SET_SEARCH_LOADING: function SET_SEARCH_LOADING(state, value) {
      state.searchLoading = value;
    },
    SET_CATEGORY_PRODUCTS: function SET_CATEGORY_PRODUCTS(state, value) {
      state.searchProducts = value;
    },
    SET_SEARCH_CATEGORY: function SET_SEARCH_CATEGORY(state, value) {
      state.searchCategory = value;
    },
    SET_SEARCH_CATEGORY_SLUG: function SET_SEARCH_CATEGORY_SLUG(state, value) {
      state.searchCategorySlug = value;
    },
    SET_DELIVERYADDRESS: function SET_DELIVERYADDRESS(state, value) {
      state.deliveryaddress = value;
    },
    ADD_TO_ADMIN_SUBHEADING_PARENTMODULEID: function ADD_TO_ADMIN_SUBHEADING_PARENTMODULEID(state, value) {
      state.admin_subheading_parent_moduleId = [value];
    },
    ADD_TO_ADMIN_SUBHEADING_MODULEID: function ADD_TO_ADMIN_SUBHEADING_MODULEID(state, value) {
      state.admin_subheading_moduleId = value;
    },
    SET_F_DYNAMIC_PAGE_INFO: function SET_F_DYNAMIC_PAGE_INFO(state, value) {
      state.f_dynamic_page_info = value;
    }
  },
  actions: {
    checkIsLoggedIn: function checkIsLoggedIn(_ref) {
      var commit = _ref.commit;
      console.log('checkIsLoggedIn called');
      console.log('checkIsLoggedIn called and token = ' + localStorage.getItem('token'));
      axios.post('/api/auth/me?token=' + localStorage.getItem('token')).then(function (response) {
        commit('SET_ISLOGGEDIN', true);
        commit('SET_USERINFO', response.data);
      })["catch"](function (error) {
        commit('SET_ISLOGGEDIN', false);
        commit('SET_USERINFO', {});
      });
    },
    checkIsAdminLoggedIn: function checkIsAdminLoggedIn(_ref2) {
      var commit = _ref2.commit;
      console.log('checkIsAdminLoggedIn called');
      console.log('checkIsAdminLoggedIn called and token = ' + localStorage.getItem('token'));
      axios.post('/api/auth/meAdmin?token=' + localStorage.getItem('token')).then(function (response) {
        commit('SET_ISADMINLOGGEDIN', true);
        commit('SET_USERINFO', response.data);
      })["catch"](function (error) {
        commit('SET_ISADMINLOGGEDIN', false);
        commit('SET_USERINFO', {});
      });
    },
    setCurrentUserRoles: function setCurrentUserRoles(_ref3) {
      var commit = _ref3.commit;
      axios.get('/api/auth/getCurrentUserRoles?token=' + localStorage.getItem('token')).then(function (response) {
        commit('SET_CURRENTUSERROLES', response.data.data);
      })["catch"](function (error) {
        commit('SET_CURRENTUSERROLES', []);
      });
    },
    setCurrentUserModules: function setCurrentUserModules(_ref4) {
      var commit = _ref4.commit;
      axios.get('/api/auth/getCurrentUserModules?token=' + localStorage.getItem('token')).then(function (response) {
        commit('SET_CURRENTUSERMODULES', response.data.modules);
        commit('SET_CURRENTUSERMODULESROUTENAMES', response.data.routenames);
      })["catch"](function (error) {
        commit('SET_CURRENTUSERMODULES', []);
        commit('SET_CURRENTUSERMODULESROUTENAMES', []);
      });
    },
    setCurrentUserWishLists: function setCurrentUserWishLists(_ref5) {
      var commit = _ref5.commit;
      axios.get('/api/getCurrentUserWishLists?token=' + localStorage.getItem('token')).then(function (response) {
        commit('SET_CURRENTUSERWISHLISTS', response.data.data);
      })["catch"](function (error) {
        commit('SET_CURRENTUSERWISHLISTS', []);
      });
    },
    setSearchProducts: function setSearchProducts(_ref6) {
      var commit = _ref6.commit;
      axios.post('/api/getSearchProductsWithDiscountCalculation/' + this.state.searchInput, {
        token: localStorage.getItem('token')
      }).then(function (response) {
        commit('SET_SEARCH_PRODUCTS', response.data.data);
        commit('SET_SEARCH_LOADING', false);
      })["catch"](function (error) {
        commit('SET_SEARCH_PRODUCTS', []);
      });
    },
    setSearchLoading: function setSearchLoading(_ref7) {
      var commit = _ref7.commit;
      commit('SET_SEARCH_LOADING', true);
    },
    setSearchLoadingFalse: function setSearchLoadingFalse(_ref8) {
      var commit = _ref8.commit;
      commit('SET_SEARCH_LOADING', false);
    },
    setSearchCategoryProducts: function setSearchCategoryProducts(_ref9) {
      var commit = _ref9.commit;
      axios.post('/api/getSearchCategoryProductsWithDiscountCalculation/' + this.state.searchCategorySlug, {
        token: localStorage.getItem('token')
      }).then(function (response) {
        commit('SET_SEARCH_CATEGORY_PRODUCTS', response.data.data);
        commit('SET_SEARCH_LOADING', false);
      })["catch"](function (error) {
        commit('SET_SEARCH_CATEGORY_PRODUCTS', []);
      });
    },
    setDynamicPageInfo: function setDynamicPageInfo(_ref10, payload) {
      var commit = _ref10.commit;
      axios.get('/api/getPageWithSlug/' + payload.pageSlug).then(function (response) {
        commit('SET_F_DYNAMIC_PAGE_INFO', response.data.data);
      })["catch"](function (error) {
        commit('SET_F_DYNAMIC_PAGE_INFO', {});
      });
    }
  }
};
exports["default"] = _default;
