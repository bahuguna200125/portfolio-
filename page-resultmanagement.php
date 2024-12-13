<?php
    /**
    * Template Name: result-Management Page
    */
?>
<?php 

get_header();?>
 <div class="container w-75">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-5 container w-75 ml-5">
    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' )."#projects" ); ?>">Projects</a></li>
    <li class="breadcrumb-item active" aria-current="page">Result-Management</li>
  </ol>
</nav>
   
    <div class="heading container w-75">
        <h1>RESULT MANAGEMENT SYSTEM</h1>
    </div>

    <main>
        <div class="content container w-75 mb-5">
            <p><strong>Home Page Overview:</strong></p>
            <p>The <strong>Home Page</strong> serves as the starting point of the system, providing users with easy access to essential features.</p>

            <ol>
                <li><strong>User Login:</strong>
                    <ul>
                        <li>Registered users can log in securely to view their results and access their account.</li>
                    </ul>
                </li>
                <li><strong>New User Registration:</strong>
                    <ul>
                        <li>New users can quickly register to create an account and become part of the system.</li>
                    </ul>
                </li>
            </ol>

            <p>The home page is designed to be user-friendly and intuitive, offering a simple and secure way for users to get started with the platform. It serves as the gateway to all the features of the result management system.</p>

          <img src="<?php echo get_template_directory_uri().'/assets/images/login-resultmanagement.png'; ?>" alt="Result Management System" class=" img mb-5">

            
            <p><strong>Admin Section Overview:</strong></p>
            <p>In my project, the <strong>Admin Section</strong> serves as the central control hub, accessible exclusively to administrators. The admin holds complete authority over the system, enabling them to manage users and results efficiently. Key features of this section include:</p>

            <ol>
                <li><strong>User Management:</strong>
                    <ul>
                        <li>View a list of all registered users.</li>
                        <li>Edit user details, such as personal or account information.</li>
                        <li>Delete user accounts if necessary.</li>
                    </ul>
                </li>
                <li><strong>Result Management:</strong>
                    <ul>
                        <li>Add results for users in an organized and secure manner.</li>
                        <li>Modify or delete results to ensure accuracy and up-to-date information.</li>
                    </ul>
                </li>
            </ol>

            <p>The admin functions like the head of a department, overseeing and supporting users by providing seamless access to their results. This section ensures the system remains organized, secure, and user-friendly.</p>


            <img src="<?php echo get_template_directory_uri().'/assets/images/admin-resultmanagement.jpg'; ?>" alt="Result Management System" class="img mb-5">

            <p><strong>User Section Overview:</strong></p>
            <p>The <strong>User Section</strong> is designed to make it easy for users to access their results. Here's how it works:</p>

            <ol>
                <li><strong>Registration:</strong>
                    <ul>
                        <li>Users need to register first to create an account in the system.</li>
                    </ul>
                </li>
                <li><strong>Login and Result Access:</strong>
                    <ul>
                        <li>Once registered, users can log in to their accounts to view their results.</li>
                        <li>Results are added by the admin after registration, ensuring only authorized users can access their data.</li>
                    </ul>
                </li>
            </ol>

            <p>This section ensures a smooth and secure process for users to check their results anytime.</p>

            <!-- Image with spacing -->
            <img src="<?php echo get_template_directory_uri().'/assets/images/user-resultmanagement.png'; ?>" alt="Result Management System" class="img mb-5">
        </div>
    </main>
</div>
<?php
get_footer();
?>
