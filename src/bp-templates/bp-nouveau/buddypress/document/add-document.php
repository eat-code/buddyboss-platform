<?php
/**
 * BuddyBoss - Add Document
 *
 * @since BuddyBoss 1.4.0
 * @package BuddyBoss\Core
 */

if ( bp_is_my_profile() || ( bp_is_active( 'groups' ) && bp_is_group() && is_user_logged_in() ) ) :

	$active_extensions = bp_document_get_allowed_extension();

	if ( ! empty( $active_extensions ) && is_user_logged_in() ) {

		if ( bp_is_group() && groups_can_user_manage_document( bp_loggedin_user_id(), bp_get_current_group_id() ) ) {
			?>
			<div class="bb-media-actions-wrap">
				<div class="bb-media-actions">
					<a href="#" id="bp-add-document" class="bb-add-document button small outline"><i class="bb-icon-upload"></i><?php esc_html_e( 'Upload Files', 'buddyboss' ); ?></a>
				</div>
			</div>
			<?php
		} elseif ( ! bp_is_group() ) {
			?>
			<div class="bb-media-actions-wrap">
				<div class="bb-media-actions">
					<a href="#" id="bp-add-document" class="bb-add-document button small outline"><i class="bb-icon-upload"></i><?php esc_html_e( 'Upload Files', 'buddyboss' ); ?></a>
				</div>
			</div>
			<?php
		}
		bp_get_template_part( 'document/document-uploader' );
	}
endif;
