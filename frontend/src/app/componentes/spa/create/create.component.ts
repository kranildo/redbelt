import { Component, OnInit } from '@angular/core';
import { Spa } from '../spa.model';
import { SpaService } from '../spa.service';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css'],
})
export class CreateComponent implements OnInit {
  constructor(public spa: SpaService) {}

  update(): void {
    this.spa.update(this.spa.item);
  }
  create(): void {
    this.spa.create(this.spa.item);
  }
  ngOnInit(): void {}
}
