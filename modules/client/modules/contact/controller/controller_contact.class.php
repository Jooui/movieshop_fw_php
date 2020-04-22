<?php
//echo "CONTROLLER CONTACT";
class controller_contact {
		
    function __construct(){
        $_SESSION['module'] = "contact";
    }

    function list_contact(){//carga la vista(HTML JS)
        //echo "LIST CONTACT";
        require(CLIENT_CONTACT_VIEW_PATH . "inc/top_page_contact.php");
        require(CLIENT_VIEW_PATH . "inc/header_pages.html");
        loadView(CLIENT_CONTACT_VIEW_PATH,'contact.html');
        require(CLIENT_VIEW_PATH . "inc/bottom_page.html");
    }

    function send_contact(){//carga la vista(HTML JS)
        $data = array(
            'type' => 'contact',
            'name' => $_POST['name-contact'],
            'email' => $_POST['email-contact'],
            'tlf' => $_POST['tlf-contact'],
            'location' => $_POST['location-contact'],
            'issue' => $_POST['issue-contact']
        );
        
        $hola = send_email($data);
        echo json_encode($hola);
        exit;
    }
}