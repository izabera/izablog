# Introducing my blog

## What's this?

`izablog` is a very basic "blog platform" written in `php` and shell script. I
don't really know how to define it, blog platform sounds way too important
for the amount of code I wrote.

Well, it's nothing fancy but it kinda works. It needs no database: only `php`,
`ls`, `grep` and `perl` are needed on your server. Posting new articles is as
easy as writing a (Github Flavored) Markdown text file and uplading it to the
same folder as `index.php`.

*Warnings: your Markdown file must have `.md` extension and `php` must be able
*tu run said programs.

Comments are available via Disqus, Markdown conversion and themes are
available from [StrapdownJs](http://strapdownjs.com/).

## Why this instead of *random blogging platform*?

- It's easy and gracefully degreades to Markdown if javascript is disabled.
  This means a pleasant experience with screen readers, textual browsers and
  such.
- It's open source under MIT license, the source is on
  [github](https://www.github.com/izabera/izablog).
- And this is a free cake for you: ![cake](cake.svg).

