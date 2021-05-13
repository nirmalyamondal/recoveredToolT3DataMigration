ALTER TABLE `tx_kbks_bilderextras` CHANGE `tx_kbks_px_image` `tx_kbks_px_image` INT(11) NULL DEFAULT NULL;

ALTER TABLE `tx_kbks_layoutkontur` CHANGE `tx_kbks_lk_file` `tx_kbks_lk_file` INT(11) NULL DEFAULT NULL;	

#support PDF extension
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_layoutkontur` `tx_kbks_p_layoutkontur` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_top` `tx_kbks_p_bild_top` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild` `tx_kbks_p_bild` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_hilte` `tx_kbks_p_bild_hilte` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_2_t_abheft` `tx_kbks_p_bild_2_t_abheft` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_3_t_abheft` `tx_kbks_p_bild_3_t_abheft` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_fensterstanzung` `tx_kbks_p_bild_fensterstanzung` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_fuellhoehe` `tx_kbks_p_bild_fuellhoehe` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_gest_abheft` `tx_kbks_p_bild_gest_abheft` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_gummizug` `tx_kbks_p_bild_gummizug` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_klettpunkt_magnet` `tx_kbks_p_bild_klettpunkt_magnet` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_vk_schlitze` `tx_kbks_p_bild_vk_schlitze` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_p_bild_vk_tasche` `tx_kbks_p_bild_vk_tasche` INT(11) NULL DEFAULT NULL;
ALTER TABLE `tx_kbks_produkt` CHANGE `tx_kbks_slider_bilder` `tx_kbks_slider_bilder` INT(11) NULL DEFAULT NULL;

ALTER TABLE `tx_kbks_werteliste` CHANGE `tx_kbks_slider_picture` `tx_kbks_slider_picture` INT(11) NULL DEFAULT NULL;
