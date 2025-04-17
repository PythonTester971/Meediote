<?php
/*
* Plugin Name: Custom roles
*/

// var_dump('Tout est cassé');
// die;

function custom_roles_add_roles()
{
  // Recupere les capabilities du role editor geré par Wordpress
  $editorRoleCapabilities = get_role('editor')->capabilities;
  // Crée un nouveau role qui recupere les capabilities de editor
  add_role('musician', 'Musician', $editorRoleCapabilities);

  // Idem pour author et artist
  $authorRoleCapabilities = get_role('author')->capabilities;
  add_role('artist', 'Artist', $authorRoleCapabilities);

  // Ici, on crée manager avec les capabilities de editor aussi
  add_role('manager', 'Manager', $editorRoleCapabilities);
}
function custom_roles_remove_roles()
{
  // On supprime tout les roles customs créés lors de l'activation du plugin
  remove_role('musician');
  remove_role('artist');
  remove_role('manager');
}

// S'execute seulement lors de l'activation du plugin
register_activation_hook(__FILE__, 'custom_roles_add_roles');

// S'execute uniquement lors de la desactivation du plugin
register_deactivation_hook(__FILE__, 'custom_roles_remove_roles');


//Utilisation de la fonction native WP pour créer un role et vérifier si le code a marché
// $result = add_role( 'basic_contributor', 'Basic Contributor',
// 	array(
// 		'read'         => true, 
// 		'edit_posts'   => true, 
// 		'upload_files' => true, 
// 	)
// );
// if ( null !== $result ) {
// 	echo 'Hooray! A new role has been created!';
// }
// else {
// 	echo 'Oops... This role already exists.';
// }


// //cloner un role
// $author = get_role( 'author' );
// add_role( 'project_manager', 'Project Manager', $author->capabilities );


//Augmenter les capacities d'un rôle avec une fonction custom :

// function author_level_up() {
//   // Retrieve the  Author role.
//   $role = get_role(  'author' );

//   // Let's add a set  of new capabilities we want Authors to have.
//   $role->add_cap(  'edit_pages' );
//   $role->add_cap(  'edit_published_pages' );
//   $role->add_cap(  'publish_pages' );
// }
// //c'est le hook catégorie Action (l'autre, c'est le hook catégorie Filters)
// add_action( 'admin_init', 'author_level_up'); => add_action(*native_wp_function*,*curtom_function*) "hooks"
//them together

// Delete a role on plugin deactivation
// add_action( 'switch_theme', 'deactivate_my_theme' );
// function deactivate_my_theme() {
// 	remove_role( 'basic_contributor' );
// }

// Add a role on plugin activation + cloner un rôle
// add_action('init', 'activate_my_role');
// function activate_my_role()
// {
//   add_role(
//     'basic_contributor',
//     'Basic Contributor',
//     [
//       'read'         => true,
//       'edit_posts'   => true,
//       'upload_files' => true,
//     ]
//   );

//   //Cloner un role
//   $author = get_role('author');
//   add_role('project_manager', 'Project Manager', $author->capabilities);
// }
//add_role() -> wp stock la donnée quelque part (en bdd, basiquement)