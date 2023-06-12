package com.example.demo;

public class Tarefa {
  private static int proximoId = 1;
  private int id;
  private String descricao;
  private boolean concluida;

  public Tarefa(String descricao, boolean concluida) {
    this.id = proximoId++;
    this.descricao = descricao;
    this.concluida = concluida;
  }

  // Getters e Setters

  public int getId() {
    return id;
  }

  public String getDescricao() {
    return descricao;
  }

  public void setId(int i) {
    this.id = proximoId++;
  }

  public void setDescricao(String descricao) {
    this.descricao = descricao;
  }

  public boolean isConcluida() {
    return concluida;
  }

  public void setConcluida(boolean concluida) {
    this.concluida = concluida;
  }

}
