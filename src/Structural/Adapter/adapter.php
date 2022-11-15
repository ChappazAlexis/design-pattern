<?php

// class AdaptaterInterface {
//     public function getNews():array;
// }

class PaperNews {
    public function getLastNews():string {
        return "paper news string";
    }
}

class RedditFeed {
    public function getTopics(string $subredditId): array {
        return [];
    }
}



class CompositionAdapterA extends PaperNews {
    public RedditFeed $redditFeed;

    public function __construct(RedditFeed $redditFeed) {
        $this->redditFeed = $redditFeed;
    }

    public function getNews():array {
        return $this->redditFeed->getTopics("subredditID");
    }
}

$compo = new CompositionAdapterA(new RedditFeed());

$compo->getNews();