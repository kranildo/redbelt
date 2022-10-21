import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Spa } from './spa.model';

@Injectable({
  providedIn: 'root',
})
export class SpaService {
  public item: Spa = {};
  public item_lista: Spa[] = [];

  constructor(private http: HttpClient, public router: Router) {}
  create(spa: Spa): void {
    alert('Aguarde...');
    this.http.post<any>('http://localhost:8000/api/spa/create', spa).subscribe(
      (data) => {
        alert(data.message);
        this.item = {};
      },
      (resposta) => {
        alert(resposta.message);
      }
    );
  }

  update(spa: Spa): void {
    alert('Aguarde...');
    this.http
      .put<any>('http://localhost:8000/api/spa/update/' + spa.id, spa)
      .subscribe(
        (data) => {
          alert(data.message);
          this.item = {};
        },
        (resposta) => {
          alert(resposta.message);
        }
      );
  }

  delete(spa: Spa): void {
    alert('Aguarde...');
    this.http
      .delete<any>('http://localhost:8000/api/spa/delete/' + spa.id)
      .subscribe(
        (data) => {
          alert(data.message);
          this.read();
        },
        (resposta) => {
          alert(resposta.message);
        }
      );
  }
  read(): void {
    alert('Aguarde...');
    this.http.get<any>('http://localhost:8000/api/spa/read').subscribe(
      (data) => {
        this.item_lista = data.data;
      },
      (resposta) => {
        alert(resposta.message);
      }
    );
  }
}
