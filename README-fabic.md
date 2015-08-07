# README-fabic.md ( fabic/JpGraph fork )

_This is `README-fabic.md`, a purposedly separate README file for my fork
 of JpGraph ( https://github.com/fabic/JpGraph/ )

* This is a fork of Ztec's original repository https://github.com/ztec/JpGraph
* with known forked branches as of 2015-08-07 on Github merged in.
* Latest official stable is advertised at http://jpgraph.net/download/
  as **3.5.0b1 (2010-10-07)**, which appears to be the version that was
  used by Ztec : [lib/JpGraph/VERSION](/blob/master/lib/JpGraph/VERSION).
* Did however UNTAR back the official version so as to assess the difference
  `tar -xf jpgraph-3.5.0b1.tar.gz --strip-components=1 -C lib/JpGraph/`
* See commit [FABIC: PATCH WITH OFFICIAL LIBRARY VERSION v3.5.0b1 UNTARED](https://github.com/fabic/JpGraph/commit/ae09ff1123ce835e07f9e2068b54f80e84aef4a6)

### Of special interest, and which differs from the official version :

* [`lib/JpGraph/GlobalConfig.php`](tree/master/lib/JpGraph/GlobalConfig.php)
* which may be used to parameterize those few things of JpGraph
* defined at [`lib/JpGraph/src/jpg-config.inc.php`](tree/master/lib/JpGraph/src/jpg-config.inc.php)
* `\JpGraph\JpGraph::load();`
* and `\JpGraph\JpGraph::module($moduleName)` (where it might be e.g. `pie`, `bar`)

### Legacy codes wrapper “module scripts” :

* Created wrapper `jpgraph_XXX.php` scripts under `tree/master/lib/JpGraph/lib_hack/`
  so that one can have legacy scripts continue working _while_ using the `\JpGraph\JpGraph::module("XXX");` helper thing.
* Either set the `include_path` prefixed with `.:..../lib/jpgraph/lib/JpGraph/lib_hack/:....`
* or leave Composer handle this (see [composer.json](blob/master/composer.json)).
* _And yes, if using Composer, your `include_path` will be agremented (in spite of you probably not wanting this,
  and this being actually not needed for new codes that may use that library)..._

## ChangeLog

* **2015-08-07 :** NEW [lib/JpGraph/lib_hack/](tree/master/lib/JpGraph/lib_hack) `lib/` style sub-dir. with wrapper scripts.
* **2015-08-07 : initial work on this personal fork.**
  https://github.com/fabic/JpGraph/commit/49ac35fcfec3d9ba850cec052c6c2503bbc1c910
  Did review and merge all those forks out there, essentially trying to come up with
  that same "official stable v3.5.0b1" but with some few more pulses.

  **Beware** that I did this w/o testing anything, just reviewing patches as I was
  pulling in forked branches.

        git show-branch --sha1-name de3d72c ztec

        ! [de3d72c] FABIC: Added README-fabic.md, updated README.md
         ! [ztec] Merge pull request #1 from podhy/master
        --
        +  [de3d72c] FABIC: Added README-fabic.md, updated README.md
        +  [c39ba12] remove ?>
        +  [3456847] remove ?>
        +  [70681c4] disabling imageantialias
        +  [150442b] Line do not shows by default, this cause an invisible GanttVLine
        +  [1991f13] Closing tags are EVIL
        +  [e6d2c80] Updated the README with installation instructions
        +  [9e503f4] Fixed the problem with imageantialias without commenting core library.
        +  [6367a1b] +JpGraph loader now extends Symfony Bundle class
        +  [be9d358] Update JpGraph.php
        +  [be7c70d] Revert mheinzerling's "disable antialias"
        +  [b681e41] disable antialias
        +  [0d606d8] hack GroupBarPlot width
        +  [5d49700] add some type hints
        +  [12532ce] remove closing tag
        +  [29698c8] handle date x axis in accumulated bar charts
        +  [d6716ab] 当Chinese为UTF-8格式时，不转换格式
        +  [89559c1] Change README, and rename package list name to minowu/JpGraph.
        +  [8a2e789] Updated composer.json
        +  [84966ee] hacks to allow config changes without editing package
        -- [ad26df5] Merge pull request #1 from podhy/master

_**EOF**_
