<?php
require_once __DIR__ . '/../templates/myheader.php';
require_once __DIR__ . '/../templates/footer.php';
$header = generateNav('co-op');
$footer = generateFooter('co-op');
?>

<title>Snake Game</title>

<?php
echo $header;
?>

<body class="has-background-primary-light">
	<div class="container is-max-desktop">
		<div class="columns is-vcentered">
			<div class="column">
				<h1 class="title is-2">Inside Tekside <small>Reflections of a Co-op student</small></h1>
				<p class="title is-5 p-4 has-text-info-dark">Vrushang Patel</I></p>
			</div>
			<div class="column section">
				<div class="box section is-medium index-bg-img">
				</div>
			</div>
		</div>
	</div>


	<div class="block has-background-light">
		<section class="container">
			<div class="text-center">
				<div class="cell cell-3 example">

					<span class="loading triangles" aria-hidden="true"></span>
					<p> &nbsp;</p>
				</div>
			</div>

			<p>
				Over the past 8-months I’ve had the opportunity to work along side a team of brilliant software
				developers and
				engineers at Tekside.io on some large scale projects that even recently made the news.
			</p>
			<p>
				Tekside.io is a Martech company which has its roots in email marketing and has grown to be a leading
				company
				which now works with large national brands across north america to provide expert solutions and industry
				leading
				service. It’s close ties with indox marketer and It’s connections with major brands has allowed Tekside
				to
				stretch beyond simple Martech and transform into an IT consulting and solutions company which now works
				with
				SaaS and software development.
			</p>
			<p>
				Throughout my time at Tekside.io I was able to perfect my skills and develop many new ones in fields
				I’ve been
				interested in that got me passionate about computer systems and IoT. With it’s start-up vibes, I was
				able to
				work on currently indamand technologies like azure cloud, machine learning and script automation.
			</p>

			<div class="text-center">
				<div class="cell cell-3 example">
					<span class="loading triangles" aria-hidden="true"></span>
					<p> &nbsp;</p>
				</div>
			</div>
		</section>
	</div>

	<img src="/img/temas.png" class="rounded" alt="...">

	<div class="block has-background-light">
		<section class="container">
			<main class="site-main">


				<p>
					Tekside.io was different from any other co-op I’ve had before. It is a company that is very much in
					it’s early stages and as a result it gives off major start-up vibes and a “go fast break things”
					mentality with senior staff that are very capable of fixing these broken things. Overall, it always
					gave me the sense of freedom to learn and the security to know someone on my team would be able to
					catch me if I ever did something dangerous. This allowed me to grow in many ways, both as a
					developer and a student. My work spanned across many industries and various corporations; Tekside
					works with government enterprises like LCBO and Calgary Airport Authority and private business like
					Golf Town. I was handling bugs in real time and involved in implements fixes and features requested
					from the client.
				</p>
				<p>
					Some of the goals I had when I first entered this role were to gain experience working with large
					data sets and AI. This wasn’t something I had the opportunity to learn in a institutional
					environment, Tekside however had a large collection of emails incoming and outgoing which gave me
					the opportunity to work on and with data in a capacity I’ve never done so before. The main goal of
					this project was to feed this data into a machine learning algorithm to analyze and categorize data
					that grows more accurate the longer it is used. In our present world where everyone uses and throws
					around terms like “AI” and “machine learning” it was really exciting to develop the understanding to
					how these processes are created and managed as these skills will only become more valuable as this
					technology becomes more fleshed out. All the while adding tangible benefit to the company and seeing
					code I created and contributed to used in something larger than I.
				</p>
				<p>
					As great as my time at Tekside was I can admit it wasn’t all fun and games with exciting new
					projects to work on. I got the opportunity to see the many ways software teams can make mistakes and
					how poor software design choices can snowball and turn into financial headaches for companies the
					longer they’re left ignored. This technical debt which grows and transforms into a problem that
					doesn’t make any real sense to fix can lead to entire codebases to be scraped and recreated a new.
					The importance of scalability and abstraction which have been topics I too have tried to block out
					became ever present during my tenure and made me revaluate my approach to development and made me
					seek out ways to improve my foresight when looking for solutions.
				</p>


				<div class="text-center">
					<div class="cell cell-3 example">
						<span class="loading triangles" aria-hidden="true"></span>
						<p> &nbsp;</p>
					</div>
				</div>

				<div class="text-center">
					<img src="/img/Capture1.png" class="rounded" alt="...">
				</div>

				<div class="text-center">
					<p> &nbsp;</p>
					<div class="cell cell-3 example">
						<span class="loading triangles" aria-hidden="true"></span>
					</div>
				</div>
			</main>
		</section>
	</div>
</body>

<?php
echo $footer;
?>