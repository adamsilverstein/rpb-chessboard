<?php
/******************************************************************************
 *                                                                            *
 *    This file is part of RPB Chessboard, a WordPress plugin.                *
 *    Copyright (C) 2013-2015  Yoann Le Montagner <yo35 -at- melix.net>       *
 *                                                                            *
 *    This program is free software: you can redistribute it and/or modify    *
 *    it under the terms of the GNU General Public License as published by    *
 *    the Free Software Foundation, either version 3 of the License, or       *
 *    (at your option) any later version.                                     *
 *                                                                            *
 *    This program is distributed in the hope that it will be useful,         *
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *    GNU General Public License for more details.                            *
 *                                                                            *
 *    You should have received a copy of the GNU General Public License       *
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *                                                                            *
 ******************************************************************************/
?>

<div id="rpbchessboard-optionPage" class="rpbchessboard-jQuery-enableSmoothness">

	<form action="<?php echo htmlspecialchars($model->getFormActionURL()); ?>" method="post">

		<p>
			<input type="hidden" name="smallScreenCompatibility" value="0" />
			<input type="checkbox" id="rpbchessboard-smallScreenCompatibilityField" name="smallScreenCompatibility" value="1"
				<?php if($model->getSmallScreenCompatibility()): ?>checked="yes"<?php endif; ?>
			/>
			<label for="rpbchessboard-smallScreenCompatibilityField">
				<?php _e('Enable support for small-screen devices', 'rpbchessboard'); ?>
			</label>
		</p>

		<p class="description">
			<?php
				_e(
					'Activating this option allows to customize how RPB Chessboard renders chess diagrams on small-screen devices (such as smartphones).',
				'rpbchessboard');
			?>
		</p>



		<?php foreach($model->getSmallScreenModes() as $index => $mode): ?>

			<h3 title="<?php
				if($mode->minScreenWidth === 0) {
					echo sprintf(
						__('These options apply to devices whose resolution is less than %1$s pixel width.', 'rpbchessboard'),
						htmlspecialchars($mode->maxScreenWidth)
					);
				}
				else {
					echo sprintf(
						__('These options apply to devices whose resolution lies between %1$s and %2$s pixel width.', 'rpbchessboard'),
						htmlspecialchars($mode->minScreenWidth + 1),
						htmlspecialchars($mode->maxScreenWidth)
					);
				}
			?>">
				<?php echo sprintf(__('Screen width &le; %1$s pixels', 'rpbchessboard'), htmlspecialchars($mode->maxScreenWidth)); ?>
			</h3>

			<input type="hidden" name="smallScreenMode<?php echo htmlspecialchars($index); ?>-minScreenWidth" value="<?php echo htmlspecialchars($mode->minScreenWidth); ?>" />
			<input type="hidden" name="smallScreenMode<?php echo htmlspecialchars($index); ?>-maxScreenWidth" value="<?php echo htmlspecialchars($mode->maxScreenWidth); ?>" />

			<div>
				<p>
					<?php
						echo sprintf(__('Clamp square size to: %1$s pixels', 'rpbchessboard'),
							'<input type="text" id="rpbchessboard-smallScreenMode' . htmlspecialchars($index) . '-squareSizeField" class="rpbchessboard-squareSizeField" ' .
								'name="smallScreenMode' . htmlspecialchars($index) . '-squareSize" ' .
								'size="'      . htmlspecialchars($model->getDigitNumberForSquareSize()) . '" ' .
								'maxLength="' . htmlspecialchars($model->getDigitNumberForSquareSize()) . '" ' .
								'value="'     . htmlspecialchars($mode->squareSize) . '"/>'
						);
					?>
				<span id="rpbchessboard-smallScreenMode<?php echo htmlspecialchars($index); ?>-squareSizeSlider" class="rpbchessboard-squareSizeSlider"></span>
				</p>
			</div>

		<?php endforeach; ?>


		<script type="text/javascript">

			jQuery(document).ready(function($) {

				// Slider initialization
				function initializeSmallScreenSection(index) {
					var field = $('#rpbchessboard-smallScreenMode' + index + '-squareSizeField');
					field.prop('readonly', true);
					$('#rpbchessboard-smallScreenMode' + index + '-squareSizeSlider').slider({
						value: field.val(),
						min: <?php echo json_encode($model->getMinimumSquareSize()); ?>,
						max: <?php echo json_encode($model->getMaximumSquareSize()); ?>,
						slide: function(event, ui) { field.val(ui.value); }
					});
				}
				for(var k=0; k<<?php echo json_encode(count($model->getSmallScreenModes())); ?>; ++k) {
					initializeSmallScreenSection(k);
				}

				// Enable/disable the widget in each small-screen-mode sections
				function updateWidgetActivationState() {
					var enabled = $('#rpbchessboard-smallScreenCompatibilityField').prop('checked');
					$('.rpbchessboard-squareSizeSlider').slider(enabled ? 'enable' : 'disable');
				}
				$('#rpbchessboard-smallScreenCompatibilityField').change(updateWidgetActivationState);
				updateWidgetActivationState();
			});

		</script>



		<?php include(RPBCHESSBOARD_ABSPATH . 'templates/adminpage/optionsfooter.php'); ?>

	</form>

</div>
