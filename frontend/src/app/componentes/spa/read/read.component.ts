import { Component, OnInit } from '@angular/core';
import { Spa } from '../spa.model';
import { SpaService } from '../spa.service';

@Component({
  selector: 'app-read',
  templateUrl: './read.component.html',
  styleUrls: ['./read.component.css'],
})
export class ReadComponent implements OnInit {
  constructor(public spa: SpaService) {}

  update(item: Spa): void {
    this.spa.item = item;
  }
  delete(item: Spa): void {
    this.spa.delete(item);
  }
  ngOnInit(): void {
    this.spa.read();
  }
}
