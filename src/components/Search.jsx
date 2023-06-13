import Fuse from "fuse.js";
import { useState } from "react";

const options = {
  keys: ["frontmatter.title", "frontmatter.description", "frontmatter.slug"],
  includeMatches: true,
  minMatchCharLength: 2,
  threshold: 0.5,
};

function Search({ searchList }) {
  // User's input
  const [query, setQuery] = useState("");

  const fuse = new Fuse(searchList, options);

  // Set a limit to the posts: 5
  const posts = fuse
    .search(query)
    .map((result) => result.item)
    .slice(0, 5);

  function handleOnSearch({ target = {} }) {
    const { value } = target;
    setQuery(value);
  }

  return (
    <div className="">
      <div className="">
        {/* input button */}
        <input
          type="text"
          id="search"
          value={query}
          onChange={handleOnSearch}
          className="block w-21px text-sm h-6 text-gray-900 border border-gray-300 bg-gray-50 mt-2 px-2 rounded-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
          placeholder="Search Aktiviti"
        />
      </div>

      {/* prompt search untuk bagitahu user dah dapat berapa result */}
      <div className="query absolute bg-gray-800">
        {query.length > 1 && (
          <div className="my-3 text-white p-2">
            Jumpa {posts.length} {posts.length === 1 ? "jawapan" : "jawapan"} untuk '
            {query}'
          </div>
        )}

          {/* list semua result */}
        <ul className="list-none z-50">
          {posts &&
            posts.map((post) => (
              <li className="py-2 p-2 flex">
                <a className="text-lg text-blue-700 hover:text-blue-900 hover:underline underline-offset-2" href={`/aktiviti/${post.frontmatter.slug}`}>{post.frontmatter.title}</a>
                {/* <p className="text-sm text-gray-800">{post.frontmatter.description}</p> */}
              </li>
            ))}
        </ul>
      </div>

    </div>
  );
}

export default Search;
