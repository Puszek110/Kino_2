#include "mainwindow.h"
#include "ui_mainwindow.h"
#include <QMainWindow>
#include <QtSql>
#include <QSqlDatabase>
#include <QMessageBox>
#include <QtCore>
MainWindow::MainWindow(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::MainWindow)
{
    ui->setupUi(this);
}

MainWindow::~MainWindow()
{
    delete ui;
}
// --------------------------------------Funkcje-----------------------------------------------------------------------------
void con()
{
    QSqlDatabase baza =  QSqlDatabase ::addDatabase("QMYSQL");
    baza.setHostName("127.0.0.1");
    baza.setUserName("root");
    baza.setPassword("");
    baza.setDatabaseName("kino");

    QMessageBox inform;
    if(baza.open())
    {
      inform.setText("Połączenie udane");
    }
    else
    {
     inform.setText("Brak Połączenia, sprawdź dane");
    }
    inform.exec();
}

void add(QString nazwa, QString k1, QString k2, QString k3, QString k4, QString k5)
{
    QMessageBox inform;
        QSqlQuery query;
        query.exec("INSERT INTO `"+nazwa+"`(`imie`, `nazwisko`, `miejsce`, `data`, `film`) VALUES ('"+k1+"','"+k2+"','"+k3+"','"+k4+"','"+k5+"')");
       query.exec();
        if(query.exec())
        {
            inform.setText("polecenie wykonane");
        }
        else
        {
            qDebug()<<"error: "<<query.lastError();
        }

}
void del(QString k1,QString nazwa)
{
 QMessageBox inform;
        QSqlQuery query;
        query.exec("DELETE FROM "+nazwa+" WHERE id="+k1);
        query.exec();
        if(query.exec())
        {
            inform.setText("polecenie wykonane");
        }
        else
        {
            qDebug()<<"error: "<<query.lastError();
        }


}
void close()
{
    QSqlDatabase baza =  QSqlDatabase ::addDatabase("QMYSQL");
    baza.setHostName("127.0.0.1");
    baza.setUserName("root");
    baza.setPassword("");
    baza.setDatabaseName("kino");
    baza.close();

}
//-----------------------------------------------------------------------------------------------------------------------------
void MainWindow::on_con_clicked()
{
   con();
}


void MainWindow::on_sort_clicked()
{
    QString nazwa = ui->baza->text();
    QString kolumna = ui->t1->text();

         QSqlQuery *query = new QSqlQuery;
         QSqlQueryModel *show = new  QSqlQueryModel();
         query->prepare("SELECT * FROM "+nazwa+" ORDER BY "+kolumna);
         query->exec();
         show->setQuery(*query);
         ui->tabela->setModel(show);

}


void MainWindow::on_show_clicked()
{
    QString nazwa = ui->baza->text();
    QSqlQueryModel * show = new QSqlQueryModel;
    QSqlQuery * query = new QSqlQuery;
    query->prepare("SELECT * FROM "+nazwa);

    query->exec();

    show->setQuery(*query);
    ui->tabela->setModel(show);
    if(query->exec())
    {
       qDebug()<<"error: "<<query->lastQuery();
    }
    else
    {
     qDebug()<<"error: "<<query->lastError();
    }

}


void MainWindow::on_help_clicked()
{
QMessageBox inform;
inform.setText("Instrukacja");
inform.exec();
}

void MainWindow::on_del_clicked()
{
    QString nazwa = ui->baza->text();
    QString k1 = ui->t1->text();
    del(nazwa,k1);
}


void MainWindow::on_add_clicked()
{
    QString id = ui->id->text();
    QString nazwa = ui->baza->text();
    QString k1 = ui->t1->text();
    QString k2 = ui->t2->text();
    QString k3 = ui->t3->text();
    QString k4 = ui->t4->text();
    QString k5 = ui->t5->text();

     add(nazwa,k1,k2,k3,k4,k5);
}

void MainWindow::on_exit_clicked()
{
   close();

}
