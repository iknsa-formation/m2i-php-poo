import { Component, OnInit } from '@angular/core';
import {ArticleService} from "../article.service";

@Component({
  selector: 'app-article',
  templateUrl: './article.component.html',
  styleUrls: ['./article.component.scss']
})
export class ArticleComponent implements OnInit {

  constructor(private articleService: ArticleService) {
    console.log('here');
    this.articleService.getArticles().toPromise().then(r => {
      console.log(r);
    });

    this.articleService.deleteArticle(5).toPromise().then(r => {
      console.log(r);
    });
  }

  ngOnInit(): void {
  }


}
