//Bearer
// const api_key = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMjcyZTNjYWI4YmY5ZTEzYTFkODlhNmU3NjU0NGE1NDI2MDc1MDhhZjIwNTE2OTkzNjQyMjA0YzAzYTUzYjhlMTM0NzY2ZDA1MGNhMzdlNGIiLCJpYXQiOjE3Mjg2NzIyNjcuNjY4OTY5LCJuYmYiOjE3Mjg2NzIyNjcuNjY4OTc0LCJleHAiOjE3NjAyMDgyNjcuNTU0NDE5LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.1pPXfpJYQESjuuuxR_oiUR4VtNCdg2tsCizebK77w_EoOJeS1MYkRp2Ac3YLB-dOZZ7kcQrO6N4kWVU1OOspjFkMqezQiceu6NkMkfEv4HmKH6y7gJp8ihyhE6Fh07rw5_HTcrhHzrvNhKymCj0ZaAxMzkGcy7ao-L6dpOU0deywhvY2TobVvZUyVXGPnlR9LIrkp5mOonv5iQbWly43RQqSsjSqyCkgBb5vR1KaAHhQqQ8MLqpQt7QzQKy2Pwd8OQgja9mj1G4rfWp-lXRBjZVysEubezs3Y3Q6kbdK_kKRooQJRkwloktkB57rdYjTWSuPNFDKqX3oCoPQfUCXjFPnCN6flO5AwC1LDZGIfFG2IuX9rvrIjrG8svSeX6cBtzosqY6yEDxTxQnzxcNlZgA2t8gJrAWHnDGbf2s8modN8vIoXVIygZNEI_EU8S3bb_YeRLaxALL01lIEh_nLurE0nPfDWOodOyFxcsLZOGQ_HkSNX1FYjBcAmyP2kEqjdPGxFc_sx-gskDs7mMSdLjoc48G-cKbvDaQ3tYGAxZ5o1C1Ux2BcSxW2o7347aUUFSNYSuDD21pftKkIWZd-JBIP5_jKXTB8Y0Pu0vZeLWNHBw5cwo3N2BCa0nkLndLA5PIVZDJuM0A9JcBAL_n3v1ZbJLATXxo8a1dsluXE5y0";
 const url = `http://localhost:8000/api/products`;
// fetch
fetch(url, {
    method: "GET",
    credentials: "same-origin",
    headers: {
        "Accept" : "application/json",
    },
}).then((response) => {
    return response.json();
}).then((products) => {
    console.log(products);
}).catch(function(error) {
    console.log(error);
});
