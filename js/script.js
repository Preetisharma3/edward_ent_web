// SHow
// Job Folder

// var newData = "";

function fetchData() {
    var newData = ""
    fetch(`http://localhost/edward_ent/public/api/v1/show`, {
            headers: {
                "Content-Type": "application/json",
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
        })
        .then((response) => response.json())
        .then((data) => {
            // console.log(data);
            data.forEach(function(data, index) {

                newData += `<option value="${data.id}">${data.job_folder}</option>`;
            });
            document.getElementById("jobfolder").innerHTML = newData;
        })
        .catch((error) => {
            console.log(error);
        });
    // postId();
}

fetchData();


function fetchData2() {
    var newData = "";
    fetch(`http://localhost/edward_ent/public/api/v1/show`, {
            headers: {
                "Content-Type": "application/json",
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
        })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            data.forEach(function(data, index) {

                newData += `<option value="${data.id}">${data.job_folder}</option>`;
            });
            document.getElementById("jobfolder3").innerHTML = newData;
        })
        .catch((error) => {
            console.log(error);
        });
    // postId();
}

fetchData2();


function fetchData1() {
    var newData = "";
    fetch(`http://localhost/edward_ent/public/api/v1/Agreement`, {
            headers: {
                "Content-Type": "application/json",
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
        })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            data.forEach(function(data, index) {
                newData += `<option value="${data.id}">${data.Agreement}</option>`;
            });
            document.getElementById("jobfolder1").innerHTML = newData;
        })
        .catch((error) => {
            console.log(error);
        });

}
fetchData1();


// function fetchTemplate() {
//     var newData = "";
//     fetch(`http://localhost/edward_ent/public/api/v1/getTemplate`, {
//             headers: {
//                 "Content-Type": "application/json",
//                 // 'Content-Type': 'application/x-www-form-urlencoded',
//             },
//         })
//         .then((response) => response.json())
//         .then((data) => {
//             console.log(data);
//             data.forEach(function(data, index) {
//                 newData += `<option value="${data.id}">${data.Agreement}</option>`;
//             });
//             document.getElementById("jobfolder1").innerHTML = newData;
//         })
//         .catch((error) => {
//             console.log(error);
//         });
// }
// fetchTemplate();


function fetchTemplate() {
    fetch(`http://localhost/edward_ent/public/api/v1/getTemplate`, {
            headers: {
                "Content-Type": "application/json",
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
        })
        .then((response) => response.json())
        .then((data) => {
            //console.log(data);
            var html = "";
            html = ` <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Template Name</th>
                        <th scope="col">Active/Inactive</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>`;
            data.forEach((data) => {
                //console.log(data);
                var id = data.id;
                // console.log(id);
                html += `   
                <tbody>
                   
                    <tr>
                        <td>${data.id}</td>
                        <td>${data.template_name}</td>
                        <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class=" slider round"></span>
                                </label>
                            </td>
                       
                        <td> 
                            <button type="button" class="btn mx-1" name="edit" data-toggle="modal" data-target="#showContent">
                                <i class="fa fa-pencil text-warning"></i>
                            </button>
                          <button type="button" class="btn mx-2" name="delete" onclick="deleteData(${id})">
                                <i class="fa fa-trash text-danger"></i>
                            </button>
                        </td>
                    </tr>
                   
                </tbody> 
           
              
           `;

                document.getElementById("table").innerHTML = html;
            });

            if (data.status == 1) {
                console.log(data.status);
            } else {
                false;
            }
        })
        .catch((error) => {
            console.log(error);
        });
    // postId();
}

fetchTemplate();