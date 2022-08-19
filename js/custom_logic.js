(function($){
const addImageButton   = $("#addImageButton");
const chooseImageInput = $("#chooseImageInput");
const imageTitle       = $("#imageTitle");


if(addImageButton!=null){

    addImageButton.on("click",(ev)=>{
        ev.preventDefault();
        chooseImageInput.trigger("click");
    });

    chooseImageInput.on("change",ev=>{
        files = (ev.target.files);
        if(files.length>0){
            imageTitle.text(`Images (${files.length})`);
        }else{
            imageTitle.text(`Images (${files.length})`);
        }

    });

}

const loginForm = $("#loginForm");

$(()=>{

    const logoutLink = $(".logout-link");

    logoutLink.on("click",ev=>{

      swal({
          title:"Logout",
          text:"Are you sure to logout?",
          icon:"warning",
          buttons:["No","Yes"],
          dangerMode:true,

      }).then(
          (willLogout)=>{
            if(willLogout){
                window.location.href="./actions/action.php?logout=true";
            }
          }
      );

    //   $(".swal-modal").css({
    //     "background":"var(--bg-gradient)",
    //     "color":"white"
    //   });
    });

  });

}($));