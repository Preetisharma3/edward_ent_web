//var form = document.getElementById("formData");
// addEventListener("submit", function (e) {
//   e.preventDefault();
//   var email = document.getElementById("username").value;
//   var password = document.getElementById("password").value;
  
//   fetch("", {
//     method: "POST",
//     body: JSON.stringify({
//       email: email,
//       password: password,
//     }),
//     headers: { "Content-type": "application/json; charset=UTF-8" },
//   })
//     .then(function (data) {
//       console.log(data);
//       return data.json();
//     })
//     .then(function (data) {
//       console.log(data.token);
//       if (!data.token) {
//         alert("Fill correct email and password");
//       } else {
//         location.href = "dashboard.php";
//       }
//     });
// });

//fetch data

// function fetchData() {
//   fetch(`http://localhost/lumen/blog/public/showUser`)
//     .then((response) => response.json())
//     .then((data) => {
//       console.log(data);
//       var html = "";
//       html = ` <thead class="thead-light">
//                     <tr>
//                         <th scope="col">#</th>
//                         <th scope="col">Name</th>
//                         <th scope="col">Email</th>
//                         <th scope="col">Username</th>
//                         <th scope="col">Password</th>
//                          <th scope="col">Phone</th>
//                         <th scope="col">Role Type</th>
//                         <th scope="col">Active/Inactive</th>
//                         <th scope="col">Action</th>
//                     </tr>
//                 </thead>`;
//       data.forEach((data) => {
//         console.log(data);
//         var id = data.id;
//         console.log(id);
//         html += `   
//                 <tbody>
                   
//                     <tr>
//                         <td>${data.id}</td>
//                         <td>${data.first_name}</td>
//                         <td>${data.email}</td>
//                          <td>${data.username}</td>
//                         <td>${data.password}</td>
//                          <td>${data.phone}</td>
//                          <td>${data.user_type}</td>
//                          <td>
//                                           <label class="switch">
//                                             <input type="checkbox">
//                                             <span class="slider round"></span>
//                                           </label>
//                          </td>
//                         <td> 
//                             <button type="button" class="btn mx-1" name="edit">
//                                 <i class="fa fa-pencil text-warning"></i>
//                             </button>
//                           <button type="button" class="btn mx-2" name="delete">
//                                 <i class="fa fa-trash text-danger"></i>
//                             </button>
//                         </td>
//                     </tr>
                   
//                 </tbody> 
           
              
//            `;
//         document.getElementById("table").innerHTML = html;
//       });
//     })
//     .catch((error) => {
//       console.log(error);
//     });
// }

// fetchData();
