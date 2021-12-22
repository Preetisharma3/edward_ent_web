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
                // console.log(data.id);

                // let newData = document.getElementById("job_folder");
                // data.forEach(function(items, index) {
                //     newData.innerHTML += `<option value="${items.id}">${items.job_folder}</option>`;
                // });

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

// SHow
// Job Agreement

// function fetchData1() {
//     var newData = "";
//     fetch(`http://localhost/edward_ent/public/api/v1/Agreement`, {
//             headers: {
//                 "Content-Type": "application/json",
//                 // 'Content-Type': 'application/x-www-form-urlencoded',
//             },
//         })
//         .then((response) => response.json())
//         .then((data) => {
//             console.log(data);
//             data.forEach(function(data, index) {


//                 console.log(data.id);
//                 newData += `<option value="${data.id}">${data.Agreement}</option>`;
//             });
//             document.getElementById("agree").innerHTML = newData;
//         })
//         .catch((error) => {
//             console.log(error);
//         });
//     // postId();
// }

// fetchData1();



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

                console.log(data);

                // let newData = document.getElementById("job_folder");
                // data.forEach(function(items, index) {
                //     newData.innerHTML += `<option value="${items.id}">${items.job_folder}</option>`;
                // });

                newData += `<option value="${data.id}">${data.Agreement}</option>`;
            });
            document.getElementById("jobfolder1").innerHTML = newData;
        })
        .catch((error) => {
            console.log(error);
        });
    // postId();
}

fetchData1();


// url = "http://localhost/edward_ent/public/api/v1/Agreement";
// fetch(url)
//     .then((response) => {
//         return response.json();
//     })
//     .then((data) => {
//         let newData = document.getElementById("jobfolder1");
//         data.forEach(function(items, index) {
//             newData.innerHTML += `<option value="${items.id}">${items.Agreement}</option>`;
//         });
//     });