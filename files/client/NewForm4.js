function toggleDashboard() {
    var dashboard = document.getElementById("dashboard");
    if (dashboard.style.left === "0px" || dashboard.style.left === "") {
        dashboard.style.left = "-250px"; // Hide the dashboard
        document.querySelector(".hamburger").style.marginTop="10px";
    } else {
        dashboard.style.left = "0px"; // Show the dashboard
        document.querySelector(".hamburger").style.marginTop="40px";
    }
}
// function dropdown(){
//     let drop_me = document.querySelector(".drop_me i");
//     drop_me.className=".icon_.icon_rotate";
    
// }
