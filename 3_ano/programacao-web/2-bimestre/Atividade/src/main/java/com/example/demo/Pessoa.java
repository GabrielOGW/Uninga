package com.example.demo;

public class Pessoa {
  private static int proximoId = 1;
  private int id;
  private String nome;
  private String cpf;

  public Pessoa(String nome, String cpf) {
    this.nome = nome;
    this.cpf = cpf;
  }

  // Getters e Setters

  public int getId() {
    return id;
  }
  
  public void setId(int i) {
    this.id = proximoId++;
  }

  public String getNome() {
    return nome;
  }

  public void setNome(String nome) {
    this.nome = nome;
  }

  public String getCpf() {
    return cpf;
  }

  public void setCpf(String cpf) {
    this.cpf = cpf;
  }
}
