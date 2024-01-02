import { Columns, Coins, MapPinLine, Hand, HandsPraying, Handshake, Hexagon, UsersFour } from "@phosphor-icons/react";
import Body from "@/components/Body";
import Title from "@/components/Title";
import AccordionItem from "@/components/AccordionItem";
import React, { useEffect, useState } from 'react';
import axios from 'axios';

import TransformandoTerritorios from "@/assets/TransformandoTerritorios.png";
import Participantes from "@/assets/MapaFIC_ProgramaTT.jpg";

function Community() {
  const [institutos, setInstitutos] = useState([]);
    useEffect(() => {
        const fetchData = async () => {
          try {
            const url = `${import.meta.env.VITE_REACT_APP_API_ROOT}/institutos`;
            const response = await axios.get(url);
            setInstitutos(response.data);
          } catch (error) {
            console.error('Erro ao buscar institutos:', error);
          }
        };
    
        fetchData();
      }, []);
   
  return (
    <div className="flex-1 pt-[92px]">
      <Body>
        <section className="flex flex-col gap-12">
          <Title content="Institutos Comunitários" />
          <div className="flex flex-col gap-2" >
            {institutos.map((data, index) => (
                <AccordionItem icon={data.icon[0]} title={data.title} key={index}>
                  <p dangerouslySetInnerHTML={{ __html: data.conteudo }}>
                  </p>
                </AccordionItem>
            ))}
          </div>
        </section>
        <div className="pt-12 flex justify-center">
          <img
            src={TransformandoTerritorios}
            alt="Descreve o modelo de operação da transformando territórios"
          />
        </div>
        <section>
          <div className="flex flex-col gap-10 pt-12">
            <Title
              color="#F59E0B"
              content="Institutos Comunitários no Brasil"
            />
            <div className="flex flex-col gap-6 xl:gap-8">
              <p>
                Até pouco tempo atrás, existiam no Brasil apenas três organizações que operavam neste modelo: o Instituto Comunitário Grande Florianópolis, o Tabôa - Desenvolvimento Comunitário e o Instituto Baixada Maranhense.  Porém, desde 2018 o Instituto para o Desenvolvimento do Investimento Social (IDIS), em parceria com a Charles Stewart Mott Foundation, criou o programa Transformando Territórios, que vem fomentando a criação de mais Institutos e Fundações Comunitárias no Brasil.
              </p>
              <img
                src={Participantes}
                alt="Mapa dos participantes do programa, destacado estão: Amazonas, Maranhão, Alagoas, Sergipe, Bahia, Minas Gerais, Espírito Santo, Rio de Janeiro, São Paulo, Santa Cataria e Rio Grande do Sul."
              />
            </div>
          </div>
        </section>
      </Body>
    </div>
  );
}

export default Community;
