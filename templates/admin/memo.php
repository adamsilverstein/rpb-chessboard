
<h3><?php _e('Reminder', 'rpbchessboard'); ?></h3>


<h4><?php _e('FEN diagram alone', 'rpbchessboard'); ?></h4>

<p>
	<?php echo sprintf(
		__(
			'Chess diagrams can be inserted in pages and posts thanks to the %1$s[fen][/fen]%2$s shortcode. '.
			'See an example below '.
			'(left: code written by the post or page author; right: what is publicly visible).',
		'rpbchessboard'),
		'<span class="rpbchessboard-admin-code-inline">',
		'</span>'
	); ?>
</p>

<div class="rpbchessboard-admin-columns">

	<div class="rpbchessboard-admin-column-left">
		<div class="rpbchessboard-admin-code-block">
			<?php _e('White to move and mate in two:', 'rpbchessboard'); ?>
			<br/><br/>
			[fen]r2qkbnr/ppp2ppp/2np4/4N3/2B1P3/2N5/PPPP1PPP/R1BbK2R w KQkq - 0 6[/fen]
			<br/><br/>
			<?php _e(
				'This position is known as Légal Mate. '.
				'It is named after the French player François Antoine de Kermeur Sire de Legale (1702-1795).'
			, 'rpbchessboard'); ?>
		</div>
		<p>
			<?php echo sprintf(
				__(
					'The string between the %1$s[fen][/fen]%2$s tags describe the position. '.
					'The used notation follows the %3$sForsyth-Edwards notation (FEN)%4$s. '.
					'A comprehensive description of the FEN format is available on %3$sWikipedia%4$s.',
				'rpbchessboard'),
				'<span class="rpbchessboard-admin-code-inline">',
				'</span>',
				sprintf('<a href="%1$s" target="_blank">',
					__('http://en.wikipedia.org/wiki/Forsyth%E2%80%93Edwards_Notation', 'rpbchessboard')
				),
				'</a>'
			); ?>
		</p>
	</div>

	<div class="rpbchessboard-admin-column-right">
		<div class="rpbchessboard-admin-visu-block">
			<p><?php _e('White to move and mate in two:', 'rpbchessboard'); ?></p>
			<pre class="jsChessLib-fen-source" id="rpbchessboard-admin-example1">r2qkbnr/ppp2ppp/2np4/4N3/2B1P3/2N5/PPPP1PPP/R1BbK2R w KQkq - 0 6</pre>
			<script type="text/javascript">
				jsChessRenderer.processFENByID("rpbchessboard-admin-example1", 28, true);
			</script>
			<p>
				<?php _e(
					'This position is known as Légal Mate. '.
					'It is named after the French player François Antoine de Kermeur Sire de Legale (1702-1795).'
				, 'rpbchessboard'); ?>
			</p>
		</div>
	</div>

</div>





<h4><?php _e('Simple PGN game', 'rpbchessboard'); ?></h4>

<div class="rpbchessboard-admin-columns">

	<div class="rpbchessboard-admin-column-left">
		<div class="rpbchessboard-admin-code-block">
			[pgn]
			<br/><br/>
			[Event "London, England"]<br/>
			[Site "London, England"]<br/>
			[Date "1912.10.29"]<br/>
			[Round "?"]<br/>
			[White "Lasker, Edward"]<br/>
			[Black "Thomas, George Alan"]<br/>
			[Result "1-0"]<br/>
			<br/>
			1. d4 e6 2. Nf3 f5 3. Nc3 Nf6 4. Bg5 Be7 5. Bxf6 Bxf6 6. e4
			fxe4 7. Nxe4 b6 8. Ne5 O-O 9. Bd3 Bb7 10. Qh5 Qe7 11. Qxh7+
			Kxh7 12. Nxf6+ Kh6 13. Neg4+ Kg5 14. h4+ Kf4 15. g3+ Kf3
			16. Be2+ Kg2 17. Rh2+ Kg1 18. Kd2# 1-0
			<br/><br/>
			[/pgn]
		</div>
		<p>
			<?php echo sprintf(
				__(
					'The code between the %1$s[pgn][/pgn]%2$s tags describe the game. '.
					'The used notation follows the standard %3$sPGN format%4$s. '.
					'It can be copy-pasted from a .pgn file generated by any chess database software, '.
					'including %5$sChessbase%6$s, %7$sScid%8$s, etc...',
				'rpbchessboard'),
				'<span class="rpbchessboard-admin-code-inline">',
				'</span>',
				sprintf('<a href="%1$s" target="_blank">',
					__('http://en.wikipedia.org/wiki/Forsyth%E2%80%93Edwards_Notation', 'rpbchessboard')
				),
				'</a>',
				'<a href="http://www.chessbase.com/" target="_blank">',
				'</a>',
				'<a href="http://scid.sourceforge.net/" target="_blank">',
				'</a>'
			); ?>
		</p>
	</div>

	<div class="rpbchessboard-admin-column-right">
		<div class="rpbchessboard-admin-visu-block">
			<pre class="jsChessLib-pgn-source" id="rpbchessboard-admin-example2-in">
				[Event "London, England"]
				[Site "London, England"]
				[Date "1912.10.29"]
				[Round "?"]
				[White "Lasker, Edward"]
				[Black "Thomas, George Alan"]
				[Result "1-0"]

				1. d4 e6 2. Nf3 f5 3. Nc3 Nf6 4. Bg5 Be7 5. Bxf6 Bxf6 6. e4
				fxe4 7. Nxe4 b6 8. Ne5 O-O 9. Bd3 Bb7 10. Qh5 Qe7 11. Qxh7+
				Kxh7 12. Nxf6+ Kh6 13. Neg4+ Kg5 14. h4+ Kf4 15. g3+ Kf3
				16. Be2+ Kg2 17. Rh2+ Kg1 18. Kd2# 1-0
			</pre>
			<div class="jsChessLib-invisible" id="rpbchessboard-admin-example2-out">
				<div class="rpbchessboard-game-head">
					<div class="jsChessLib-field-fullNameWhite">
						<span class="rpbchessboard-white-square">&nbsp;</span>
						<span class="jsChessLib-anchor-fullNameWhite"></span>
					</div>
					<div class="jsChessLib-field-fullNameBlack">
						<span class="rpbchessboard-black-square">&nbsp;</span>
						<span class="jsChessLib-anchor-fullNameBlack"></span>
					</div>
					<div class="jsChessLib-field-Event">
						<span class="jsChessLib-anchor-Event"></span>
						<span class="jsChessLib-field-Round">(<span class="jsChessLib-anchor-Round"></span>)</span>
						<span class="jsChessLib-field-Date">- <span class="jsChessLib-anchor-Date"></span></span>
					</div>
				</div>
				<div class="rpbchessboard-game-body jsChessLib-field-moves">
					<span class="jsChessLib-anchor-moves"></span>
					<div class="jsChessLib-field-Result">
						<span class="jsChessLib-anchor-Result"></span>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				jsChessRenderer.processPGNByID("rpbchessboard-admin-example2");
			</script>
		</div>
	</div>

</div>





<h4><?php _e('PGN game with comments, variations and diagrams', 'rpbchessboard'); ?></h4>

<div class="rpbchessboard-admin-columns">

	<div class="rpbchessboard-admin-column-left">
		<div class="rpbchessboard-admin-code-block">
			[pgn]
			<br/><br/>
			[Event "<?php _e('Blitz tournament aside from the Cap d\'Agde Open', 'rpbchessboard'); ?>"]<br/>
			[Site "Cap d'Agde FRA"]<br/>
			[Date "2010.10.28"]<br/>
			[Round "?"]<br/>
			[White "<?php _e('Anonymous 1', 'rpbchessboard'); ?>"]<br/>
			[Black "<?php _e('Anonymous 2', 'rpbchessboard'); ?>"]<br/>
			[WhiteElo "1800"]<br/>
			[BlackElo "2050"]<br/>
			[Result "0-1"]<br/>
			[Annotator "<?php _e('Anonymous 2, who apologizes beforehand for this game!', 'rpbchessboard'); ?>"]<br/>
			<br/>
			1. e4 c5 2. c3 d5 3.exd5 Qxd5 4. d4 e5 5. Nf3 e4 6. Ne5 Nd7<br/>
			<br/>
			{On l'aura compris, les deux derniers coups des noirs visent à harceler le cavalier blanc.}<br/>
			<br/>
			7.Bc4 $1<br/>
			<br/>
			{[pgndiagram] J'avoue avoir sous-estimé la force du coup 7.Fc4.
			En effet, en m'obligeant à reculer la dame en d6,
			les blancs entravent gravement les perspectives de développement du fou f8.
			Mis en difficulté sur le plan stratégique,
			je décide donc à ce moment de rechercher des compensations tactiques,
			et de tendre un piège subtil à mon adversaire.}<br/>
			<br/>
			7... Qd6 8.Nxf7<br/>
			<br/>
			{Victoire, il est tombé dans mon piège : il a lâché la case g6 !
			Ni une, ni deux, je m'en empare...}<br/>
			<br/>
			8... Qg6 9.Nxh8 Qxg2 10.Rf1 Nb6 $5 11.Bxg8 $2<br/>
			<br/>
			{[pgndiagram]Je continue à renforcer ma position.
			Le coup 10...Cb6 m'a ainsi permis de me débarasser de deux de mes pièces non-protégées :
			d'une part la tour a8, fortement exposée de part sa position centrale,
			et d'autre part le cavalier g8,
			dont l'activité rayonnante n'était pas indispensable à l'exécution fructueuse de mon plan.
			Au contraire, les blancs ont maintenant trois pièces non-protégées, en a1, g8 et h8.}<br/>
			<br/>
			11... Bh3 12. Bf7+ Kd8 13. Nd2 cxd4 14. cxd4 Bb4 15. a3 $6
			{<?php _e('Unforseen move...', 'rpbchessboard'); ?>}
			15...Qxf1# 0-1
			<br/><br/>
			[/png]
		</div>
	</div>

	<div class="rpbchessboard-admin-column-right">
		<div class="rpbchessboard-admin-visu-block">
			<pre class="jsChessLib-pgn-source" id="rpbchessboard-admin-example3-in">
				[Event "<?php _e('Blitz tournament aside from the Cap d\'Agde Open', 'rpbchessboard'); ?>"]
				[Site "Cap d'Agde FRA"]
				[Date "2010.10.28"]
				[Round "?"]
				[White "<?php _e('Anonymous 1', 'rpbchessboard'); ?>"]
				[Black "<?php _e('Anonymous 2', 'rpbchessboard'); ?>"]
				[WhiteElo "1800"]
				[BlackElo "2050"]
				[Result "0-1"]
				[Annotator "<?php _e('Anonymous 2, who apologizes beforehand for this game!', 'rpbchessboard'); ?>"]

				1. e4 c5 2. c3 d5 3.exd5 Qxd5 4. d4 e5 5. Nf3 e4 6. Ne5 Nd7

				{On l'aura compris, les deux derniers coups des noirs visent à harceler le cavalier blanc.}

				7.Bc4 $1

				{<span class="jsChessLib-anchor-diagram"></span> J'avoue avoir sous-estimé la force du coup 7.Fc4.
				En effet, en m'obligeant à reculer la dame en d6,
				les blancs entravent gravement les perspectives de développement du fou f8.
				Mis en difficulté sur le plan stratégique,
				je décide donc à ce moment de rechercher des compensations tactiques,
				et de tendre un piège subtil à mon adversaire.}

				7... Qd6 8.Nxf7

				{Victoire, il est tombé dans mon piège : il a lâché la case g6 !
				Ni une, ni deux, je m'en empare...}

				8... Qg6 9.Nxh8 Qxg2 10.Rf1 Nb6 $5 11.Bxg8 $2

				{
					<span class="jsChessLib-anchor-diagram"></span>
					Je continue à renforcer ma position.
					Le coup 10...Cb6 m'a ainsi permis de me débarasser de deux de mes pièces non-protégées :
					d'une part la tour a8, fortement exposée de part sa position centrale,
					et d'autre part le cavalier g8,
					dont l'activité rayonnante n'était pas indispensable à l'exécution fructueuse de mon plan.
					Au contraire, les blancs ont maintenant trois pièces non-protégées, en a1, g8 et h8.
				}

				11... Bh3 12. Bf7+ Kd8 13. Nd2 cxd4 14. cxd4 Bb4 15. a3 $6
				{<?php _e('Unforseen move...', 'rpbchessboard'); ?>}
				15...Qxf1# 0-1
			</pre>
			<div class="jsChessLib-invisible" id="rpbchessboard-admin-example3-out">
				<div class="rpbchessboard-game-head">
					<div class="jsChessLib-field-fullNameWhite">
						<span class="rpbchessboard-white-square">&nbsp;</span>
						<span class="jsChessLib-anchor-fullNameWhite"></span>
					</div>
					<div class="jsChessLib-field-fullNameBlack">
						<span class="rpbchessboard-black-square">&nbsp;</span>
						<span class="jsChessLib-anchor-fullNameBlack"></span>
					</div>
					<div class="jsChessLib-field-Event">
						<span class="jsChessLib-anchor-Event"></span>
						<span class="jsChessLib-field-Round">(<span class="jsChessLib-anchor-Round"></span>)</span>
						<span class="jsChessLib-field-Date">- <span class="jsChessLib-anchor-Date"></span></span>
					</div>
					<div class="jsChessLib-field-Annotator"><?php
						echo sprintf(__('Commented by %1$s', 'rpbchessboard'), '<span class="jsChessLib-anchor-Annotator"></span>');
					?></div>
				</div>
				<div class="rpbchessboard-game-body jsChessLib-field-moves">
					<span class="jsChessLib-anchor-moves"></span>
					<div class="jsChessLib-field-Result">
						<span class="jsChessLib-anchor-Result"></span>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				jsChessRenderer.processPGNByID("rpbchessboard-admin-example3");
			</script>
		</div>
	</div>

</div>
