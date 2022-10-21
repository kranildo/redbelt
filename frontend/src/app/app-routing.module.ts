import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreateComponent } from './componentes/spa/create/create.component';
import { ReadComponent } from './componentes/spa/read/read.component';

const routes: Routes = [
  {
    path: 'spa/read',
    component: ReadComponent,
  },
  {
    path: 'spa/create',
    component: CreateComponent,
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
