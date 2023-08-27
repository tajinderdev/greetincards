
import axios from "axios";

export const getCommonHeaders = () => {
  console.log('----localStorage.getItem("token")',localStorage.getItem("token"))
  
  const token = localStorage.getItem("token");
  let token11 = `Bearer ${token}`;


  const headers = {
    Accept: "application/json",
   
    // "Access-Control-Allow-Headers": "*",
        "Access-Control-Allow-Origin": "*",
    //     "Access-Control-Allow-Methods": "*" ,   
    Authorization: `Bearer ${token}`
  };
  return headers;
};

export const httpGet = async (url) => {
  return axios
    .get(url, {
      headers: getCommonHeaders(),
    })
    .then((res) => {
      return res;
    })
    .catch((err) => {
      return err.res;
    });
};

export const httpDelete = async (url) => {
  return axios
    .delete(url, {
      headers: getCommonHeaders(),
    })
    .then((res) => {
      return res;
    })
    .catch((err) => {
      return err.res;
    });
};

export const httpPost = async (url:any, body:any) => {
  return axios
    .post(url, body,{
      headers: getCommonHeaders(),
    })
    .then((res) => {
      return res;
    })
    .catch((err) => {
      return err.response;
    });
};

export const httpPatch = async (url, body) => {
  return axios
    .patch(url, body, {
      headers: getCommonHeaders(),
    })
    .then((res) => {
      return res;
    })
    .catch((err) => {
      return err.res;
    });
};

// export const httpPostFormData = async (url, body) => {
//   let commonHeaders = getCommonHeaders();
//   delete commonHeaders.Accept;

//   return axios
//     .post(url, body, {
//       headers: commonHeaders,
//     })
//     .then((res) => {
//       return res;
//     })
//     .catch((err) => {
//       return err.response;
//     });
// };




