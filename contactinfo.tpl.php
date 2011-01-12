<?php
// $Id$

/**
 * @file
 * contactinfo.tpl.php
 * Default theme implementation to display the hcard in a block.
 *
 * Available variables:
 *
 * - $contactinfo: variable_get('contactinfo', array()).
 *
 * - $given_name: The given-name value.
 * - $family_name: The family-name value.
 * - $org: The name of the business or organization.
 *
 * - $tagline: The tagline.
 *
 * - $street_address: The street-address value.
 * - $locality: The locality value. In USA, this is the city.
 * - $region: The region value. In the USA, this is the state.
 * - $postal_code: The postal-code value.
 * - $country: The country-name value.
 *
 * - $longitude: The longitude value in decimal degrees format.
 * - $latitude: The latitude value in decimal degrees format.
 *
 * - $phones: An array of phone numbers.
 * - $faxes: An array of fax numbers.
 *
 * - $email_url: The href for the mailto link.
 * - $email: The email address value.
 *
 */
?>
<div id="<?php print $id; ?>" class="vcard">

<?php if ($type == 'personal'): ?>
  <div class="fn n">
    <?php if ($given_name): ?>
      <span class="given-name"><?php print $given_name; ?></span>
    <?php endif; ?>
    <?php if ($family_name): ?>
      <span class="family-name"><?php print $family_name; ?></span>
    <?php endif; ?>

    <div class="org"><?php print $org; ?></div>
  </div>
<?php else: ?>
  <div class="fn org"><?php print $org; ?></div>
<?php endif; ?>

<?php if ($tagline): ?>
  <div class="tagline"><?php print $tagline; ?></div>
<?php endif; ?>

  <div class="adr">
    <span class="street-address"><?php print $street_address; ?></span>
    <span class="locality"><?php print $locality; ?></span>,
    <span class="region"><?php print $region; ?></span>
    <span class="postal-code"><?php print $postal_code; ?></span>
    <span class="country-name"><?php print $country; ?></span>
  </div>

  <div class="geo">
    <abbr class="longitude" title="<?php print $longitude; ?>"><?php print contactinfo_coord_convert($longitude, 'longitude')?></abbr>
    <abbr class="latitude" title="<?php print $latitude; ?>"><?php print contactinfo_coord_convert($latitude, 'latitude')?></abbr>
  </div>

  <div class="phone">
    <?php foreach ($phones as $phone): ?>
      <?php if ($phone): ?>
        <span class="tel"><abbr class="type" title="voice"><?php print t('Telephone'); ?>:</abbr> <?php print $phone; ?></span><br />
      <?php endif; ?>
    <?php endforeach; ?>
    <?php foreach ($faxes as $fax): ?>
      <?php if ($fax): ?>
        <span class="tel"><abbr class="type" title="fax"><?php print t('FAX'); ?>:</abbr> <?php print $fax; ?></span><br />
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <?php if ($email): ?>
    <a href="<?php print $email_url; ?>" class="email"><?php print $email; ?></a>
  <?php endif; ?>

</div>