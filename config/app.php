<?php

define('ENV', 'asd_local');

if (ENV == 'asd_local') {

    define('APP_URL', 'https://b569-2406-b400-d11-9862-5360-3f1d-6fe2-e1f4.ngrok-free.app/projects/webflow_applications/webflow_collections_ui/dist/app/');

    define('HOME_PAGE_URL', 'https://9fa0-2406-b400-d11-9862-2eda-b023-cb7d-b778.ngrok-free.app/projects/webflow_applications/redirect_management_app/manageRedirect.php');

    define('CLIENT_ID', '0985dcf52516b9eb8ca416dac466171b9f0ceafa3209d11359027e6a0571dd71');

    define('CLIENT_SECRET', '2e8ecadb7f836979aa90d093bf34b95059e6d47fe23a7e578e115f39a8827e00');

    define('UPLOAD_PATH', 'https://3c6d-2406-b400-d11-9862-bb4c-48fa-b7f1-71d3.ngrok-free.app/projects/webflow_collections_app/app/');
}

if (ENV == 'rp_local') {

    define('APP_URL', 'http://localhost:5173/andrew/webflow_collections_app/app');
    define('HOME_PAGE_URL', 'http://localhost:5173/andrew/webflow_collections_app/');
    define('CLIENT_ID', 'e6b54abd7bc636af7ccf60a0e10e52db35339d052cb90519b74eb40c87cedd50');
    define('CLIENT_SECRET', 'a59c3b80f172447569e69aa4cb7463fb92ce593b6303237bf0ab8e7ef2429d49');
}

if (ENV == 'prod') {
    define('APP_URL', '/app/');
    define('HOME_PAGE_URL', '/plp/cmsadmin/');
    # add the prod client id and secret
    define('CLIENT_ID', 'e6b54abd7bc636af7ccf60a0e10e52db35339d052cb90519b74eb40c87cedd50');
    define('CLIENT_SECRET', 'a59c3b80f172447569e69aa4cb7463fb92ce593b6303237bf0ab8e7ef2429d49');

    // define('UPLOAD_PATH', 'https://8511-2406-b400-d11-9862-36cb-f62e-2f4-d24.ngrok-free.app/projects/webflow_collections_app/app/');

    define('UPLOAD_PATH', 'https://5bd5-2406-b400-d11-9862-2a91-d37f-aae3-8376.ngrok-free.app/plp/cmsadmin/app/');
}


# Common Config
# Application's Name
define('APP_NAME', 'Manage Collections Webflow App in PHP');
# Define the Scopes that your app needs here.
define('SCOPES', 'assets:read assets:write authorized_user:read cms:read cms:write custom_code:read custom_code:write forms:read forms:write pages:read pages:write sites:read sites:write ecommerce:read ecommerce:write');
# End-point to start the process of Authroization.
define('AUTHORIZATION_URL', 'https://webflow.com/oauth/authorize');
# Default Response Type.
define('RESPONSE_TYPE', 'code');

# Default Grant Type.
define('GRANT_TYPE', 'authorization_code');
