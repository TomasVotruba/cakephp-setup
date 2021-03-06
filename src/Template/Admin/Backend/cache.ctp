<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Error\Debugger;
use Cake\I18n\FrozenTime;

?>

<div class="index col-md-12">

<h2>Cache Config</h2>

<div class="actions">
<ul>
	<?php foreach ($caches as $key => $config) { ?>
	<li>
		<h3><?php echo h($key); ?></h3>

		<div>
			Data: <?php echo Debugger::exportVar($data[$key]); ?>
			<?php if ($data[$key]) { ?>
				<small>(<?php echo $this->Time->timeAgoInWords(new FrozenTime($data[$key])); ?>)</small>
			<?php } ?>
			<div>
			<?php echo $this->Form->postLink('Store current time for testing', ['?' => ['key' => $key]], ['class' => 'button primary btn btn-primary']); ?>
			</div>
		</div>

		<details>
			<summary>Details</summary>
		<pre><?php echo print_r($config, true); ?></pre>
		</details>
	</li>
	<?php } ?>
</ul>
</div>

</div>
