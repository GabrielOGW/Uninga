package com.example.demo;

import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/pessoas")
public class PessoaController {
  @Autowired
  private PessoaRepository pessoaRepository;

  @GetMapping
  public List<Pessoa> listarPessoa() {
    return pessoaRepository.findAll();
  }

  @PostMapping
  public Pessoa adicionarPessoa(@RequestBody Pessoa pessoa) {
    return pessoaRepository.save(pessoa);
  }

  @DeleteMapping("/{id}")
  public void apagarPessoa(@PathVariable Long id) {
    pessoaRepository.deleteById(id);
  }

  @PutMapping("/{id}")
  public void updatePessoa(@PathVariable Long id, @RequestBody Pessoa pessoa) {
    Pessoa pAlterada = pessoaRepository.findById(id)
            .orElseThrow(() -> new RuntimeException("Pessoa não encontrada"));
    pAlterada.setNome(pessoa.getNome());
    pAlterada.setCpf(pessoa.getCpf());
    pAlterada.setTelefone(pessoa.getTelefone());
    pessoaRepository.save(pAlterada);
  }
}
