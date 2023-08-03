package com.example.demo;

import java.util.ArrayList;
import java.util.List;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
public class PessoaController {
    private List<Pessoa> pessoas = new ArrayList<>();
    private int proximoId = 0;

    @PostMapping("/pessoas")
    public Pessoa adicionarPessoa(@RequestBody Pessoa pessoa) {
        pessoa.setId(proximoId++);
        pessoas.add(pessoa);
        return pessoa;
    }

    @GetMapping("/pessoas")
    public List<Pessoa> listarPessoas() {
        return pessoas;
    }

    @DeleteMapping("/pessoas/{id}")
    public ResponseEntity<String> excluirPessoa(@PathVariable("id") int id) {
        pessoas.removeIf(Pessoa -> Pessoa.getId() == id);
        return new ResponseEntity<>(
                "Pessoa deletada com sucesso", HttpStatus.OK);
    }

    @PatchMapping("/pessoas/{id}")
    public Pessoa atualizarPessoa(@PathVariable("id") int id, @RequestBody Pessoa PessoaAtualizada) {
        for (Pessoa Pessoa : pessoas) {
            if (Pessoa.getId() == id) {
                Pessoa.setNome(PessoaAtualizada.getNome());
                Pessoa.setCpf(PessoaAtualizada.getCpf());
                return Pessoa;
            }
        }
        return null;
    }
}
