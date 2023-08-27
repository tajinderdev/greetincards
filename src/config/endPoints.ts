/**
 * BASE PATH for APIS
 */
export const BASE_URL = "http://127.0.0.1:8000/api"; 
// export const BASE_URL = "http://127.0.0.1:5000/api"; 
// export const BASE_URL = "http://localhost:5000/api"; 


/**
 * NonAuth APIS  
 */
export const SIGN_UP = `${BASE_URL}/register`;


/**
 * NonAuth APIS  
 */
export const LOGIN = `${BASE_URL}/login`;


/**
 * Update profile  
 */
export const UPDATE_PROFILE = `${BASE_URL}/users`;


/**
 * Get profile  
 */
export const GET_PROFILE = `${BASE_URL}/users`;


/**
 * Create shop  
 */
export const CREATE_SHOP = `${BASE_URL}/shops/add`;


/**
 * Create shop  
 */
export const SHOP_LIST = `${BASE_URL}/shops`;


/**
 * Delete shop  
 */
export const DELETE_SHOP = `${BASE_URL}/shops`;


/**
 * Update shop  
 */
export const UPDATE_SHOP = `${BASE_URL}/shops/update`;

/**
 * Create shop  
 */
export const PRODUCT_LIST = `${BASE_URL}/products`;




/**
 * get store  
 */
export const STORE_LIST = `${BASE_URL}/store`;

/**
 * Create Store  
 */
export const CREATE_STORE = `${BASE_URL}/store/add`;

/**
 * Update store  
 */
export const UPDATE_STORE = `${BASE_URL}/store/update`;

/**
 * Delete store  
 */
export const DELETE_STORE = `${BASE_URL}`;






/**
 * get  DESIGNER  
 */
export const DESIGNER_LIST = `${BASE_URL}/store`;

/**
 * Create  DESIGNER  
 */
export const CREATE_DESIGNER = `${BASE_URL}/store/add`;

/**
 * Update  DESIGNER  
 */
export const UPDATE_DESIGNER = `${BASE_URL}/store/update`;

/**
 * Delete  DESIGNER  
 */
export const DELETE_DESIGNER = `${BASE_URL}`;