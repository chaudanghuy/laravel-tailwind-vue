import axios from "axios";
axios.defaults.withCredential = true;

const api = axios.create({
  baseURL: import.meta.env.VITE_BASE_URL,
  withCredentials: true
})

export default api