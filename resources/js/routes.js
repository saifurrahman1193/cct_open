// frontend
import home_f from "./frontend/components/home.vue";


// backend
import login_b from "./backend/components/login.vue";
import dashboard_b from "./backend/components/dashboard.vue";
import changepasswordcontainer_b from "./backend/components/changepasswordcontainer.vue";
import profilecontainer_b from "./backend/components/profilecontainer.vue";
import company_b from "./backend/components/company.vue";
import cardsettings_b from "./backend/components/cardsettings.vue";
import devices_b from "./backend/components/devices.vue";
import departments_b from "./backend/components/departments.vue";
import cardtypes_b from "./backend/components/cardtypes.vue";
import blocklist_b from "./backend/components/superadmin/blocklist.vue";
import blocklisthistory_b from "./backend/components/superadmin/blocklisthistory.vue";
import designations_b from "./backend/components/designations.vue";
import employmenttypes_b from "./backend/components/employmenttypes.vue";



import accesscontrol_b from "./backend/components/superadmin/accesscontrol.vue";
import developer_b from "./backend/components/superadmin/developer.vue";
import shiftings_b from "./backend/components/shiftings.vue";

import reports_b from "./backend/components/report/reports.vue";
import attendance_report_b from "./backend/components/report/attendance_report.vue";



// errors
import notfound from "./errors/notfound.vue";


export const routes = [{
        path: '/',
        name: 'home',
        component: home_f
    },


    // ===============admin routes===================
    // ===============admin routes===================
    {
        path: '/admin',
        name: 'admin',
        component: login_b
    },
    {
        path: '/admin/dashboard',
        name: 'dashboard_b',
        component: dashboard_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/changepassword',
        name: 'changepassword_b',
        component: changepasswordcontainer_b,
        meta: { requiresLogin: true },
    },
    {
        path: '/admin/profile',
        name: 'profile_b',
        component: profilecontainer_b,
        meta: { requiresLogin: true },
    },
    {
        path: '/admin/company',
        name: 'company_b',
        component: company_b,
        meta: { requiresLogin: true },
    },
    {
        path: '/admin/cardsettings',
        name: 'cardsettings_b',
        component: cardsettings_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/devices',
        name: 'devices_b',
        component: devices_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/shiftings',
        name: 'shiftings_b',
        component: shiftings_b,
        meta: { requiresLogin: true },
    },


    {
        path: '/admin/departments',
        name: 'departments_b',
        component: departments_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/cardtypes',
        name: 'cardtypes_b',
        component: cardtypes_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/designations',
        name: 'designations_b',
        component: designations_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/employmenttypes',
        name: 'employmenttypes_b',
        component: employmenttypes_b,
        meta: { requiresLogin: true },
    },





    {
        path: '/admin/reports',
        name: 'reports_b',
        component: reports_b,
        meta: { requiresLogin: true },
    },
    {
        path: '/admin/attendance_report',
        name: 'attendance_report_b',
        component: attendance_report_b,
        meta: { requiresLogin: true },
    },



    // super admin
    {
        path: '/admin/superadmin/accesscontrol',
        name: 'accesscontrol_b',
        component: accesscontrol_b,
        meta: { requiresLogin: true },
    },

    {
        path: '/admin/superadmin/blocklist',
        name: 'blocklist_b',
        component: blocklist_b,
        meta: { requiresLogin: true },
    },
    {
        path: '/admin/superadmin/blocklisthistory',
        name: 'blocklisthistory_b',
        component: blocklisthistory_b,
        meta: { requiresLogin: true },
    },


    // developer
    {
        path: '/admin/superadmin/developer',
        name: 'developer_b',
        component: developer_b,
        meta: { requiresLogin: true },
    },



    // not found page
    {
        path: '*',
        component: notfound
    }


];
