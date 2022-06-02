let general_data;
let contact_data;

let team_s_form = document.getElementById('team_s_form');

function get_general() {

    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');

    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    let shutdown_toggle = document.getElementById('shutdown_toggle');


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        general_data = JSON.parse(this.responseText);
        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about

        if (general_data.shutdown == 0) {
            shutdown_toggle.checked = false;
            shutdown_toggle.value = 0;
        } else {
            shutdown_toggle.checked = true;
            shutdown_toggle.value = 1;
        }
    }

    xhr.send('get_general');
}

// updation 
function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        var myModal = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        console.log(this.responseText);
        if (this.responseText == 1) {
            alert('success', 'Changes saved!')
            get_general();
        } else {
            alert('error', 'Changes not saved')

        }
    }

    xhr.send('site_title=' + site_title_val + '& site_about=' + site_about_val + '&upd-genral');
}

function upd_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        console.log(this.responseText);
        if (this.responseText == 1 && general_data.shutdown == 0) {
            alert('success', 'Site has been shutdown')
        } else {
            alert('success', 'Shutdown mode off');

        }
        get_general();
    }
    xhr.send('upd_shutdown=' + val);
}

function get_contacts() {
    let contacts_ids = ["address", "gmap", "pn1", "pn2", "email", "fb", "insta", "tw"];
    let iframe = document.getElementById('iframe');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        contact_data = JSON.parse(this.responseText);
        contact_data = Object.values(contact_data);
        // console.log(contact_data);
        for (let i = 0; i < contacts_ids.length; i++)
            document.getElementById(contacts_ids[i]).innerText = contact_data[i + 1];

        iframe.src = contact_data[9];

        contact_inp(contact_data);

    }
    xhr.send('get_contact');
}

function contact_inp(data) {
    let contact_inp_ids = ["address_inp", "gmap_inp", "pn1_inp", "pn2_inp", "email_inp", "fb_inp", "insta_inp", "tw_inp", "iframe_inp"];
    for (let i = 0; i < contact_inp_ids.length; i++) {
        document.getElementById(contact_inp_ids[i]).value = data[i + 1];
    }
}

function upd_contact() {
    let contact_inp_ids = ["address_inp", "gmap_inp", "pn1_inp", "pn2_inp", "email_inp", "fb_inp", "insta_inp", "tw_inp", "iframe_inp"];
    let contact_bind = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe']
    let data_str = "";
    for (let i = 0; i < contact_inp_ids.length; i++) {
        data_str += contact_bind[i] + '=' + document.getElementById(contact_inp_ids[i]).value + '&';
    }
    data_str += 'upd_contact';

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        var myModal = document.getElementById('contact-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        console.log(this.responseText);
        if (this.responseText == 1) {
            alert('success', 'Changes saved!')
            get_contacts();
        } else {
            alert('error', 'Changes not saved')

        }
    }
    xhr.send(data_str);
}

team_s_form.addEventListener('submit', function(e) {
    e.preventDefault();
    add_member();
})

function add_member() {
    let member_name_inp = document.getElementById('member_name_inp');
    let member_pic_inp = document.getElementById('member_pic_inp');
    let data = new FormData();
    data.append('name', member_name_inp.value);
    data.append('picture', member_pic_inp.files[0]);
    data.append('add_member', '');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.onload = function() {
        var myModal = document.getElementById('team-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        if (this.responseText == 'inv_img') {
            alert('error', 'Image size should be bewtween 0-2 MB')
        } else if (this.responseText == 'inv_img') {
            alert('error', 'Please choose valid extention JPG and PNG');
        } else {
            alert('success', 'Member is Added');
            member_name_inp.value = '';
            member_pic_inp.value = '';
            get_member();
        }
    }
    xhr.send(data);

}

function get_member() {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/setting_crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        document.getElementById('team_data').innerHTML = this.responseText
    }

    xhr.send('get_member');
}

function remove_mem(val){
   let xhr = new XMLHttpRequest();
   xhr.open("POST", "../ajax/setting_crud.php", true);
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhr.onload=function(){
   if(this.responseText == 1){
    console.log(this.responseText);
    get_member();
   }
   else{
       alert('error', 'something went wrong')
   }
   }
   xhr.send('rem_mem='+val);
}



window.onload = function() {
    get_general();
    get_contacts();
    get_member();
}

// reset form data if user click on cancel 
function resetGen() {
    let site_title_inp = document.getElementById('site_title_inp')
    let site_about_inp = document.getElementById('site_about_inp')
    site_title_inp.value = general_data.site_title;
    site_about_inp.value = general_data.site_about
}
