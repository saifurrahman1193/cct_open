"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.routes = void 0;

var _home = _interopRequireDefault(require("./frontend/components/home.vue"));

var _subservices = _interopRequireDefault(require("./frontend/components/subservices.vue"));

var _subservicedetail = _interopRequireDefault(require("./frontend/components/subservicedetail.vue"));

var _login = _interopRequireDefault(require("./frontend/components/login.vue"));

var _register = _interopRequireDefault(require("./frontend/components/register.vue"));

var _profilecontainer = _interopRequireDefault(require("./frontend/components/profilecontainer.vue"));

var _changepasswordcontainer = _interopRequireDefault(require("./frontend/components/changepasswordcontainer.vue"));

var _checkout = _interopRequireDefault(require("./frontend/components/checkout.vue"));

var _payment = _interopRequireDefault(require("./frontend/components/payment.vue"));

var _productdetails = _interopRequireDefault(require("./frontend/components/productdetails.vue"));

var _productlist = _interopRequireDefault(require("./frontend/components/productlist.vue"));

var _orderhistory = _interopRequireDefault(require("./frontend/components/orderhistory.vue"));

var _wishlist = _interopRequireDefault(require("./frontend/components/wishlist.vue"));

var _comparelist = _interopRequireDefault(require("./frontend/components/comparelist.vue"));

var _pages = _interopRequireDefault(require("./frontend/components/pages.vue"));

var _login2 = _interopRequireDefault(require("./backend/components/login.vue"));

var _dashboard = _interopRequireDefault(require("./backend/components/dashboard.vue"));

var _services = _interopRequireDefault(require("./backend/components/services.vue"));

var _changepasswordcontainer2 = _interopRequireDefault(require("./backend/components/changepasswordcontainer.vue"));

var _profilecontainer2 = _interopRequireDefault(require("./backend/components/profilecontainer.vue"));

var _categories = _interopRequireDefault(require("./backend/components/categories.vue"));

var _uoms = _interopRequireDefault(require("./backend/components/uoms.vue"));

var _brands = _interopRequireDefault(require("./backend/components/brands.vue"));

var _producttypes = _interopRequireDefault(require("./backend/components/producttypes.vue"));

var _country = _interopRequireDefault(require("./backend/components/country.vue"));

var _areas = _interopRequireDefault(require("./backend/components/areas.vue"));

var _suppliers = _interopRequireDefault(require("./backend/components/suppliers.vue"));

var _products = _interopRequireDefault(require("./backend/components/products.vue"));

var _skintypes = _interopRequireDefault(require("./backend/components/skintypes.vue"));

var _applicationareas = _interopRequireDefault(require("./backend/components/applicationareas.vue"));

var _formulation = _interopRequireDefault(require("./backend/components/formulation.vue"));

var _featuredproducts = _interopRequireDefault(require("./backend/components/featuredproducts.vue"));

var _limitededitions = _interopRequireDefault(require("./backend/components/limitededitions.vue"));

var _newarrivals = _interopRequireDefault(require("./backend/components/newarrivals.vue"));

var _advertisementslider = _interopRequireDefault(require("./backend/components/advertisementslider.vue"));

var _batch = _interopRequireDefault(require("./backend/components/batch.vue"));

var _deliverysettings = _interopRequireDefault(require("./backend/components/deliverysettings.vue"));

var _carts = _interopRequireDefault(require("./backend/components/carts.vue"));

var _frontend = _interopRequireDefault(require("./backend/components/frontend.vue"));

var _company = _interopRequireDefault(require("./backend/components/company.vue"));

var _discountsettings = _interopRequireDefault(require("./backend/components/discountsettings.vue"));

var _paymentsettings = _interopRequireDefault(require("./backend/components/paymentsettings.vue"));

var _pages2 = _interopRequireDefault(require("./backend/components/pages.vue"));

var _accesscontrol = _interopRequireDefault(require("./backend/components/superadmin/accesscontrol.vue"));

var _reports = _interopRequireDefault(require("./backend/components/report/reports.vue"));

var _productvisit = _interopRequireDefault(require("./backend/components/report/productvisit.vue"));

var _wishlistall = _interopRequireDefault(require("./backend/components/report/wishlistall.vue"));

var _comparelist2 = _interopRequireDefault(require("./backend/components/report/comparelist.vue"));

var _lowstockreport = _interopRequireDefault(require("./backend/components/report/lowstockreport.vue"));

var _salesreport = _interopRequireDefault(require("./backend/components/report/salesreport.vue"));

var _chat = _interopRequireDefault(require("./backend/components/chat/chat.vue"));

var _notfound = _interopRequireDefault(require("./errors/notfound.vue"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

// frontend
// backend
// errors
var routes = [{
  path: '/',
  name: 'home',
  component: _home["default"]
}, {
  path: '/subservices',
  name: 'subservices',
  component: _subservices["default"]
}, {
  path: '/subservicedetail',
  name: 'subservicedetail',
  component: _subservicedetail["default"]
}, {
  path: '/login',
  name: 'login',
  component: _login["default"]
}, {
  path: '/register',
  name: 'register',
  component: _register["default"]
}, {
  path: '/changepassword',
  name: 'changepassword',
  component: _changepasswordcontainer["default"],
  meta: {
    requiresLogin: true
  }
}, {
  path: '/profile',
  name: 'profile',
  component: _profilecontainer["default"],
  meta: {
    requiresLogin: true
  }
}, {
  path: '/checkout',
  name: 'checkout',
  component: _checkout["default"],
  meta: {
    requiresLogin: true
  }
}, {
  path: '/payment/:cartId',
  name: 'payment',
  component: _payment["default"],
  meta: {
    requiresLogin: true
  }
}, {
  path: '/productdetails/:productName/:productId',
  name: 'productdetails',
  component: _productdetails["default"]
}, {
  path: '/productlist',
  name: 'productlist',
  component: _productlist["default"]
}, {
  path: '/orderhistory',
  name: 'orderhistory',
  component: _orderhistory["default"],
  meta: {
    requiresLogin: true
  }
}, {
  path: '/wishlist',
  name: 'wishlist',
  component: _wishlist["default"],
  meta: {
    requiresLogin: true
  }
}, {
  path: '/comparelist',
  name: 'comparelist',
  component: _comparelist["default"]
}, {
  path: '/pages/:pageSlug',
  name: 'pages',
  component: _pages["default"]
}, // ===============admin routes===================
// ===============admin routes===================
{
  path: '/admin',
  name: 'admin',
  component: _login2["default"]
}, {
  path: '/admin/dashboard',
  name: 'dashboard_b',
  component: _dashboard["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/services',
  name: 'services_b',
  component: _services["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/changepassword',
  name: 'changepassword_b',
  component: _changepasswordcontainer2["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/profile',
  name: 'profile_b',
  component: _profilecontainer2["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/categories',
  name: 'categories_b',
  component: _categories["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/uoms',
  name: 'uoms_b',
  component: _uoms["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/brands',
  name: 'brands_b',
  component: _brands["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/producttypes',
  name: 'producttypes_b',
  component: _producttypes["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/skintypes',
  name: 'skintypes_b',
  component: _skintypes["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/country',
  name: 'country_b',
  component: _country["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/areas',
  name: 'areas_b',
  component: _areas["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/suppliers',
  name: 'suppliers_b',
  component: _suppliers["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/products',
  name: 'products_b',
  component: _products["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/applicationareas',
  name: 'applicationareas_b',
  component: _applicationareas["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/formulation',
  name: 'formulation_b',
  component: _formulation["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/featuredproducts',
  name: 'featuredproducts_b',
  component: _featuredproducts["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/limitededitions',
  name: 'limitededitions_b',
  component: _limitededitions["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/newarrivals',
  name: 'newarrivals_b',
  component: _newarrivals["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/advertisementsliders',
  name: 'advertisementslider_b',
  component: _advertisementslider["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/batch',
  name: 'batch_b',
  component: _batch["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/deliverysettings',
  name: 'deliverysettings_b',
  component: _deliverysettings["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/carts',
  name: 'carts_b',
  component: _carts["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/frontend',
  name: 'frontend_b',
  component: _frontend["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/company',
  name: 'company_b',
  component: _company["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/discountsettings',
  name: 'discount_settings_b',
  component: _discountsettings["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/paymentsettings',
  name: 'paymentsettings_b',
  component: _paymentsettings["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/pages',
  name: 'pages_b',
  component: _pages2["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/reports',
  name: 'reports_b',
  component: _reports["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/productvisit',
  name: 'productvisit_b',
  component: _productvisit["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/wishlistall',
  name: 'wishlistall_b',
  component: _wishlistall["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/comparelist',
  name: 'comparelist_b',
  component: _comparelist2["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/lowstockreport',
  name: 'lowstockreport_b',
  component: _lowstockreport["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/salesreport',
  name: 'salesreport_b',
  component: _salesreport["default"],
  meta: {
    requiresAdminLogin: true
  }
}, {
  path: '/admin/chat',
  name: 'chat_b',
  component: _chat["default"],
  meta: {
    requiresAdminLogin: true
  }
}, // super admin
{
  path: '/admin/superadmin/accesscontrol',
  name: 'accesscontrol_b',
  component: _accesscontrol["default"],
  meta: {
    requiresAdminLogin: true
  }
}, // not found page
{
  path: '*',
  component: _notfound["default"]
}];
exports.routes = routes;