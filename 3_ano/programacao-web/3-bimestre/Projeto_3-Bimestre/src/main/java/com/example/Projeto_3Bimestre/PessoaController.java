package main.java.com.example.Projeto_3Bimestre;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/pessoas")
public class PessoaController {

  @Autowired
  private PessoaRepository pessoaRepository;

  @GetMapping
  public Iterable<Pessoa> listarPessoas() {
    return pessoaRepository.findAll();
  }

  @GetMapping("/{id}")
  public Pessoa getPessoa(@PathVariable Long id) {
    return pessoaRepository.findById(id).orElse(null);
  }

  @PostMapping
  public Pessoa criarPessoa(@RequestBody Pessoa pessoa) {
    return pessoaRepository.save(pessoa);
  }

  @PutMapping("/{id}")
  public Pessoa atualizarPessoa(@PathVariable Long id, @RequestBody Pessoa pessoa) {
    if (pessoaRepository.existsById(id)) {
      pessoa.setId(id);
      return pessoaRepository.save(pessoa);
    }
    return null;
  }

  @DeleteMapping("/{id}")
  public void deletarPessoa(@PathVariable Long id) {
    pessoaRepository.deleteById(id);
  }
}
