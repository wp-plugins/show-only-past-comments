<?php
/*
Plugin Name: Show Only Past Comments
Plugin URI: http://apasionados.es/
Description: Modifies the comment query and shows only comments that have a date and time in the past. Normally WordPress shows also comments with a date and time in the future.
Author: Apasionados, Interactivate
Author URI: http://apasionados.es/
Version: 1.0
Text Domain: show-only-past-comments
*/

/*  This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

	function show_only_past_comments_not_future_comments( $comments , $post_id ){
		 global $wpdb;
		 $args = array(
				 'post_id' => $post_id,
				 'status' => 'approve',
				 'order' => 'ASC',
				 'date_query' => array(
						 'before' => 'tomorrow',
						 'inclusive' => true,
				 ),
		 );
		 $comments = get_comments($args);
		 return  $comments;
	}
	add_filter( 'comments_array' , 'show_only_past_comments_not_future_comments' , 10, 2 );

	function modify_get_comments_number_count_only_past_comments( $count, $post_id){
		global $wpdb;
		$where = $wpdb->prepare( "WHERE comment_post_ID = %d and comment_date <= NOW()", $post_id );    
		$count = $wpdb->get_results( "SELECT comment_approved, COUNT( * ) AS num_comments FROM {$wpdb->comments} {$where} GROUP BY comment_approved", ARRAY_A );
	
		return $count[0]['num_comments'];
	}
	add_filter( 'get_comments_number','modify_get_comments_number_count_only_past_comments', 10,2 );
